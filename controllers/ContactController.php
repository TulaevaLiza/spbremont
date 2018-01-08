<?php

/**
 * Description of ContactController
 *
 * @author Liza
 */

class ContactController {
    public function actionIndex() {
        $data=array();
        $data['meta_title']='Контакты - СПБРемонт';
        $data['meta_kw']='спбремонт контакты, заказать ремонт квартиры, заказать ремонт офиса, заявка на замер, заявка на составление сметы';
        $data['meta_description']='Контактная информация СПбРемонт - обратная форма связи для заявок о замере и составлении сметы для ремонта квартир или офисов.';
        $data['canonical']='/контакты';
        $data['menu']=Menu::getItemsMenu(Menu::NAV_MODE);
        require_once ROOT.'/views/contactView.php';
        return TRUE;
    }

}
