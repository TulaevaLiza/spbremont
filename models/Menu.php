<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author Liza
 */
class Menu {
    const NAV_MODE=1;
    const FULL_MODE=2;
    public static function getItemsMenu($mode) {
        if($mode==self::NAV_MODE) {
            $query='select id,title,pul from items where parent=0';
            $res=Db::getQuery($query,Db::FETCH_ASSOC);   
            while($row=$res->fetch()) {
                $o[$row['id']]['link']='/услуги/'.$row['pul'];
                $o[$row['id']]['title']=$row['title'];
            }                    
            return $o;
        }         
        return '';
    }
            
}
