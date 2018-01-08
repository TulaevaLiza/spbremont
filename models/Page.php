<?php

/**
 * Description of Page
 *
 * @author Liza
 */
class Page {
    public static function getPageMetaData($pul) {
        $query="select * from pages_meta_data where pul like :pul";
        $res=Db::getQuery($query,Db::FETCH_ASSOC,array('pul'=>$pul));
        
        if($row=$res->fetch())
        {
            return $row;            
        }  
        return array();
    }
            

    public static function getPageByPul($pul) 
    {
       $data=array();
       $query="select * from pages where pul like :pul";
       $res=Db::getQuery($query,Db::FETCH_ASSOC,array('pul'=>$pul));
        
        if($row=$res->fetch())
        {
            $data=$row;            
        }       
        
        $data=array_merge($data,self::getPageMetaData($pul));   
        if(isset($data['title']))
            $data['breadcrumbs']= self::getBreadCrumbs($data['title'],$pul);
        
        $data['canonical']='/'.$pul;
        return $data;
    }
    
    private static function getBreadCrumbs($title,$pul) {
        $bread=array();
        array_push($bread,array('title'=>'Главная','link'=>'/'));
        array_push($bread,array('title'=>$title,'link'=>"/".$pul));            
        return $bread;
    }    
}
