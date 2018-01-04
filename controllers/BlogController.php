<?php

/**
 * Description of BlogController
 *
 * @author Liza
 */
/*
include_once ROOT.'/models/Blog.php';
include_once ROOT.'/models/Menu.php';
include_once ROOT.'/models/Page.php';
*/
class BlogController {

    public function actionView($pul,$id) {
        $data=array();
        $data=Blog::getBlogById($id);
        $data['otherPosts']=Blog::getBlogs(3,'id!='.$id);
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);        
        require_once ROOT.'/views/singleBlogView.php';   
        return TRUE;
    }

    public function actionIndex($pul) {
        $data=array();
        $data['blogsList']=Blog::getBlogs();
        $data=array_merge($data,Page::getPageByPul($pul));
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);
        require_once ROOT.'/views/blogView.php';                     
        return TRUE;
    }
    
    
}

