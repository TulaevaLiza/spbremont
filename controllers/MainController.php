<?php


/**
 * Description of MainController
 *
 * @author Liza
 */

class MainController {
    public function actionIndex() {
        $data=array();
        $data=Page::getPageByPul('');
        $data['items']=Item::getItemsByParent(0);
        $data['gallery']=Gallery::getAlboms(9);
        $data['blogs']=Blog::getBlogs(3);
        $data['reviews']=Reviews::getReviews();
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);

        require_once ROOT.'/views/mainView.php';
        return TRUE;
    }

}
