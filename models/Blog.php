<?php

/**
 * Description of Blog
 *
 * @author Liza
 */
class Blog {

    public static function getBlogs($limit=0,$w='') {
        $query="select * from blogs".($w!=""?" where ".$w:"")." order by date desc".($limit>0?" limit 0,".$limit:"");
        $res=Db::getQuery($query,Db::FETCH_ASSOC);
       
        $ids=array();
        while($row=$res->fetch())
        {
            $row['link']="/блог/".makePul($row['title']).'_'.$row['id'].'.html';
            $row['date_format']=formatDate($row['date']);
            $data[]=$row;
        }
        
        return $data;        
    }
    
     public static function getBlogById($id) {
        $query="select * from blogs where id=".$id;
        $res=Db::getQuery($query,Db::FETCH_ASSOC);
       
        if($row=$res->fetch())
        {
            $row['link']="/блог/".makePul($row['title']).'_'.$row['id'].'.html';
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
        array_push($bread,array('title'=>$title,'link'=>'/услуги/'.$link));            
        return $bread;
    }
}
