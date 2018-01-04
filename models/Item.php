<?php

/**
 * Description of Item
 *
 * @author Liza
 */
class Item {
    private static $itemsById=array();
    private static $itemsByPul=array();
    
    private static function getItems() {
       $query="select * from items";
       $res=Db::getQuery($query,Db::FETCH_ASSOC);
        
        while($row=$res->fetch())
        {
            $row['price_schema']=preg_replace("/[^\d]*/","",$row['price']);
            self::$itemsById[$row['id']]=$row;
            self::$itemsByPul[$row['pul']]=$row;
        }
    }
            
    public static function getItemByPul($pul) 
    {
        if(!count(self::$itemsByPul))
            self::getItems();
        if(is_array(self::$itemsByPul[$pul]))
            return self::$itemsByPul[$pul];
        
        return array();
    }    
    public static function getItemTitle($id) 
    {
        if(!count(self::$itemsById))
            self::getItems();
        if(is_array(self::$itemsById[$id]))
            return self::$itemsById[$id]['title'];          
        return '';
    }    
    public static function getItemsByParent($parent) 
    {
        if(!count(self::$itemsById))
            self::getItems();
        
        $data=array();
        
        foreach(self::$itemsById as $row) {
            if($row['parent']==$parent) {
                $row['link']='/услуги/'.$row['pul'];
                $data[]=$row;            
            }
        }
        
        return $data;
        
    }   
    public static function getBreadCrumbs($pul) {
        if(!count(self::$itemsByPul))
            self::getItems();
        
        $bread=array();
        array_push($bread,array('title'=>'Главная','link'=>'/'));
        array_push($bread,array('title'=>'Услуги по ремонту','link'=>'/услуги/'));
        if(self::$itemsByPul[$pul]['parent'])
        {
            $parent=self::$itemsByPul[$pul]['parent'];
            array_push($bread,array('title'=>self::$itemsById[$parent]['title'],'link'=>'/услуги/'.self::$itemsById[$parent]['pul']));            
        }
        array_push($bread,array('title'=>self::$itemsByPul[$pul]['title'],'link'=>'/услуги/'.$pul));            
        return $bread;
    }
}
