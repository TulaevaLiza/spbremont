<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallery
 *
 * @author Liza
 */
class Gallery {
    const WITH_PHOTO=true;
    private static function getPhotos($id,$lim=6) {
        $photos=array();
        for($i=0;$i<$lim;$i++)
            $photos[]="/template/images/portfolio12.png";
        return $photos;
    }
            

    public static function getSections($ids="") {
       $query="select * from gallery_sections".($ids!=""?" where id in ($ids)":"");
       $res=Db::getQuery($query,Db::FETCH_ASSOC);
        
        while($row=$res->fetch())
        {
              $data[$row['id']]=$row;
        }
        return $data;
    }
    public static function getAlboms($limit=0,$withPhoto=false,$lim=6) {
        $query="select * from gallery".($limit>0?" limit 0,".$limit:"");
        $res=Db::getQuery($query,Db::FETCH_ASSOC);
       
        $ids=array();
        while($row=$res->fetch())
        {
            $ids[]=$row['section'];
            $row['link']="/фото_ремонта/".makePul($row['title'])."_".$row['id'].".html";
            if($withPhoto)
                $row['photos']= self::getPhotos($row['id'],$lim);
            $data['alboms'][]=$row;
        }
        
        $data['sections']=self::getSections(join(',',$ids));
        
        return $data;        
    }
    
    public static function getAlbomById($id) {
        $query="select * from gallery where id=$id";
        $res=Db::getQuery($query,Db::FETCH_ASSOC);
        if($row=$res->fetch()) {
                $row['photos']= self::getPhotos($id);    
                return $row;
        }
        return array();
    }
    
    public static function getBreadCrumbs($id=0) {
        $bread=array();
        array_push($bread,array('title'=>'Главная','link'=>'/'));
        array_push($bread,array('title'=>'Наши работы','link'=>'/фото_ремонта/'));
        if($id>0) {
            $query="select * from gallery where id=$id";
            $res=Db::getQuery($query,Db::FETCH_ASSOC);
            if($row=$res->fetch()) {
                array_push($bread,array('title'=>$row['title'],'link'=>'/фото_ремонта/'.$row['title']));
            }
        }
            
        return $bread;
    }
}
