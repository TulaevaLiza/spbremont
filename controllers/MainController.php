<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainController
 *
 * @author Liza
 */
/*
include_once ROOT.'/models/Menu.php';
include_once ROOT.'/models/Page.php';
include_once ROOT.'/models/Item.php';
include_once ROOT.'/models/Gallery.php';
include_once ROOT.'/models/Blog.php';
include_once ROOT.'/models/Reviews.php';
*/
class MainController {
    public function actionIndex() {
        $data=array();
        $data=Page::getPageByPul('main');
        $data['items']=Item::getItemsByParent(0);
        $data['gallery']=Gallery::getAlboms(6);
        $data['blogs']=Blog::getBlogs(3);
        $data['reviews']=Reviews::getReviews();
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);

        require_once ROOT.'/views/mainView.php';
        return TRUE;
    }

}
