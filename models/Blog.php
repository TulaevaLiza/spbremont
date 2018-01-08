<?php

/**
 * Description of Blog
 *
 * @author Liza
 */
class Blog {

    private static function getCanonical($id,$title) {
        return '/блог/'.makePul($title)."_".$id.".html";
    }
    public static function getBlogs($limit=0,$w='') {
        $query="select * from blogs".($w!=""?" where ".$w:"")." order by date desc".($limit>0?" limit 0,".$limit:"");
        $res=Db::getQuery($query,Db::FETCH_ASSOC);
       
        $ids=array();
        while($row=$res->fetch())
        {
            $row['link']= self::getCanonical($row['id'],$row['title']);
            $row['date_format']=formatDate($row['date']);
            $data[]=$row;
        }
        
        return $data;        
    }
    
     public static function getBlogById($id) {
        $query="select * from blogs where id=".(int)$id;
        $res=Db::getQuery($query,Db::FETCH_ASSOC);
       
        if($row=$res->fetch())
        {
            $row['link']=self::getCanonical($row['id'],$row['title']);
            $row['canonical']=self::getCanonical($row['id'],$row['title']);
            $row['date_format']=formatDate($row['date']);
            $data=$row;
        }
        $data['breadcrumbs']=Blog::getBreadCrumbs($data['link'],$data['title']);
        
        return $data;        
    }
    
    private static function getBreadCrumbs($link,$title) {
        
        $bread=array();
        array_push($bread,array('title'=>'Главная','link'=>'/'));
        array_push($bread,array('title'=>'Блог','link'=>'/блог/'));
        array_push($bread,array('title'=>$title,'link'=>$link));            
        return $bread;
    }
}
