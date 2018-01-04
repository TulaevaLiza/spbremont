<?php


/**
 * Description of GalleryIndex
 *
 * @author Liza
 */
/*
include_once ROOT.'/models/Menu.php';
include_once ROOT.'/models/Page.php';
include_once ROOT.'/models/Gallery.php';
*/
class GalleryController {
    public function actionIndex($pul) {
        $data=array();
        $data=Page::getPageByPul($pul);
        $data['gallery']=Gallery::getAlboms(0,Gallery::WITH_PHOTO,3);
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);
        $data['breadcrumbs']=Gallery::getBreadCrumbs($data['id']);
        //print_r($data);
        //exit(0);
        require_once ROOT.'/views/galleryView.php';              
        return TRUE;
    }
    public function actionView($pul,$id) {
        $data=array();
        $data=Page::getPageByPul($pul);
        $data=Gallery::getAlbomById($id);
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);
        $data['breadcrumbs']=Gallery::getBreadCrumbs($id);
        //print_r($data);
        //exit(0);
        require_once ROOT.'/views/galleryItemView.php';              
        return TRUE;
    }}
