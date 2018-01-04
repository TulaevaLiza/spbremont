<?php

/**
 * Description of Price
 *
 * @author Liza
 */
class Price {
    private static $price=array();
    
    private static function getPrice() {
       $query="select * from price order by name";
       $res=Db::getQuery($query,Db::FETCH_ASSOC);
        
        while($row=$res->fetch())
        {
            self::$price[$row['id']]=$row;
        }
        
        foreach(self::$price as $id=>$row) {
            $sec=$row['section'];
            while($sec) {                
                self::$price[$sec]['child'][]=$row['id'];
                $sec=isset(self::$price[$sec]['section'])?self::$price[$sec]['section']:0;
            }            
        }
    }
    
    public static function getPriceList($sectionLimit=10) 
    {
        if(!count(self::$price))
            self::getPrice();
      
        $data=array();
        foreach(self::$price as $id => $rw) {
            if(isset($rw['name']))
            if(!$rw['section']) {
                $data[$id]['title']=isset($rw['name2'])?'Цены на '.$rw['name2']:$rw['name'];
                $data[$id]['link']='/прайс/'.makePul($rw['name']).'_'.$id.'.html';
                $i=0;
                if(isset($rw['child']))
                foreach($rw['child' ] as $iid) {
                    if($i<$sectionLimit && self::$price[$iid]['price']>0) {
                        $data[$id]['child'][]=self::$price[$iid];
                        $i++;
                    }
                }
            }
        }   
        return $data;
    }    

    public static function getPriceBySection($sec) 
    {
        if(!count(self::$price))
            self::getPrice();
        
        $data['title']='Цены на '.self::$price[$sec]['name2'];
        $data['meta_title']='Цены на '.self::$price[$sec]['name2'];
        $data['meta_kw']='Цены на '.self::$price[$sec]['name2'];
        $data['meta_description']='Цены на '.self::$price[$sec]['name2'];
        
        foreach (self::$price[$sec]['child'] as $id) {
            if(isset(self::$price[$id]['child'])) {
                $data['priceList'][$id]['title']=self::$price[$id]['name'];            
                foreach(self::$price[$id]['child' ] as $iid) {
                    $data['priceList'][$id]['child'][]=self::$price[$iid];
                }
            }
        }
        return $data;
    }

    public static function getBreadCrumbs($id) {
        if(!count(self::$price))
            self::getPrice();
        $bread=array();
        array_push($bread,array('title'=>'Главная','link'=>'/'));
        array_push($bread,array('title'=>'Цены на ремонт квартир и офисов','link'=>'/прайс/'));               
        array_push($bread,array('title'=>self::$price[$id]['name'],'link'=>'/прайс/'.makePul(self::$price[$id]['name']).'_'.$id));            
        return $bread;
    }
}
