<?php


/**
 * Description of PriceController
 *
 * @author Liza
 */
/*
include_once ROOT.'/models/Price.php';
include_once ROOT.'/models/Menu.php';
include_once ROOT.'/models/Page.php';
*/
class PriceController {
    public function actionView($pul,$id) {
        $data=array();
        $data=Page::getPageByPul($pul);
        $data=array_merge($data,Price::getPriceBySection($id));
        $data['breadcrumbs']=Price::getBreadCrumbs($id);
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);        
        require_once ROOT.'/views/priceSectionView.php';   
        return TRUE;
    }

    public function actionIndex($pul) {
        $data=array();
        $data['priceList']=Price::getPriceList();
        $data=array_merge($data,Page::getPageByPul($pul));
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);
        require_once ROOT.'/views/priceListView.php';                     
        return TRUE;
    }
    }
