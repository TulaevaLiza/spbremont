<?php


/**
 * Description of GalleryIndex
 *
 * @author Liza
 */

class GalleryController {
    public function actionIndex($pul) {
        $data=array();
        $data=Page::getPageByPul($pul);
        $data['gallery']=Gallery::getAlboms(0,Gallery::WITH_PHOTO,3);
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);
        $data['breadcrumbs']=Gallery::getBreadCrumbs();
        require_once ROOT.'/views/galleryView.php';              
        return TRUE;
    }
    public function actionView($pul,$id) {
        $data=array();
        $data=Page::getPageByPul($pul);
        $data=array_merge($data,Gallery::getAlbomById($id));
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);
        $data['breadcrumbs']=Gallery::getBreadCrumbs($id);
        require_once ROOT.'/views/galleryItemView.php';              
        return TRUE;
    }}
