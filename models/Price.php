<?php

/**
 * Description of Price
 *
 * @author Liza
 */
class Price {
    private static $price=array();
    
    private static function getCanonical($id,$title) {
        return '/прайс/'.makePul($title)."_".$id.".html";
    }    
    
    private static function getPrice() {
        if(!count(self::$price)) {
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
    }
    
    public static function getPriceList($sectionLimit=10) 
    {
        self::getPrice();
      
        $data=array();
        foreach(self::$price as $id => $rw) {
            if(isset($rw['name']))
            if(!$rw['section']) {
                $data[$id]['title']=isset($rw['name2'])?'Цены на '.$rw['name2']:$rw['name'];
                $data[$id]['link']=self::getCanonical($id,$rw['name']);
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
        self::getPrice();
        
        $data['title']='Цены на '.self::$price[$sec]['name2'];
        $data['meta_title']='Цены на '.self::$price[$sec]['name2'].' в Санкт-Петербурге';
        $data['meta_kw']='Цены на '.self::$price[$sec]['name2'].', '.self::$price[$sec]['name'].' цены, '.self::$price[$sec]['name'].' прайс, '.self::$price[$sec]['name'].' стоимость,';
        $data['meta_description']='Цены на '.self::$price[$sec]['name2'].' - прайс на все виды и этапы работ без учета стоимости материалов.';
        $data['canonical']=self::getCanonical($sec,self::$price[$sec]['name']);
        
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
        self::getPrice();
        $bread=array();
        array_push($bread,array('title'=>'Главная','link'=>'/'));
        array_push($bread,array('title'=>'Цены на ремонт квартир и офисов','link'=>'/прайс/'));               
        array_push($bread,array('title'=>self::$price[$id]['name'],'link'=>self::getCanonical($id,self::$price[$id]['name'])));            
        return $bread;
    }
}
