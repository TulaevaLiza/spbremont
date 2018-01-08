<?php

/**
 * Description of ItemController
 *
 * @author Liza
 */

class ItemController {
    
    public function actionView($pul,$itemPul) {
        $data=array();
        $data=Item::getItemByPul($itemPul);
        $data['breadcrumbs']=Item::getBreadCrumbs($itemPul);
        $data['childs_title']=Item::getItemTitle($data['parent']?$data['parent']:$data['id']);
        $data['childs']=Item::getItemsByParent($data['parent']?$data['parent']:$data['id']);
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);        
        require_once ROOT.'/views/singleItemView.php';   
        return TRUE;
    }

    public function actionIndex($pul) {
        $data=array();
        $data['items']=Item::getItemsByParent(0);
        $data=array_merge($data,Page::getPageByPul($pul));
        $data['gallery']=Gallery::getAlboms(6);
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);
        require_once ROOT.'/views/itemView.php';              
        return TRUE;
    }
}
