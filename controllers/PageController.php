<?php
/**
 * Description of pageController
 *
 * @author Liza
 */
/*
include_once ROOT.'/models/Page.php';
include_once ROOT.'/models/Menu.php';
*/
class PageController {
   
    public function actionView($pul) {
        $data=array();
        $data=Page::getPageByPul($pul);
        if(!count($data))
            header ('Location: /');
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);
        require_once ROOT.'/views/pageView.php';
        return TRUE;
    }

}
