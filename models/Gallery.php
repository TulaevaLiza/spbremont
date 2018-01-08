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
    private static $galleryById=array();

    private static function getPhotos($id,$lim=6) {
        $path=ROOT.'/template/images/gallery/'.$id.'/small';
        $link='/template/images/gallery/'.$id.'/small/';
        $link_orig='/template/images/gallery/'.$id.'/';
        $photos=array();
        if(is_dir($path)) {
            $f = array_diff(scandir($path), array('..', '.'));
            if(count($f)>0) {
                $count=count($f);
                for($i=0;$i<($lim>$count?$count:$lim);$i++) {
                    $fname=array_shift($f);
                    $photos[$i]['small']=$link.$fname;    
                    $photos[$i]['orig']=$link_orig.$fname;    
                }
            }
        }
        if(!count($photos)) {
            for($i=0;$i<$lim;$i++) {
                $photos[$i]['small']="/template/images/portfolio12.png";
                $photos[$i]['orig']="/template/images/portfolio12.png";
            }
        }
        return $photos;
    }
    
    private static function getCanonical($id,$title) {
        return '/фото_ремонта/'.makePul($title)."_".$id.".html";
    }

    private static function getGallery() {
        if(!count(self::$galleryById))        
        {
            $query="select * from gallery order by date desc";
            $res=Db::getQuery($query,Db::FETCH_ASSOC);
        
            while($row=$res->fetch())
            {
                $row['link']=self::getCanonical($row['id'],$row['title']);
                $row['canonical']=self::getCanonical($row['id'],$row['title']);
                self::$galleryById[$row['id']]=$row;
            }
        }
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
    public static function getAlboms($limit=0,$withPhoto=false,$limPhotos=6) {
    
        self::getGallery();
        $ids=array();
        $data['alboms']=array();
        $itr=0;
        foreach(self::$galleryById as $id=>$row) {
            $ids[]=$row['section'];            
            if($withPhoto)
                $row['photos']= self::getPhotos($row['id'],$limPhotos);
            $data['alboms'][]=$row;
            $itr++;
            if($limit && $itr>=$limit) break;
        }
        
        $data['sections']=self::getSections(join(',',$ids));
        
        return $data;        
    }
    
    public static function getAlbomById($id) {
        
        self::getGallery();
        if($row=self::$galleryById[$id]) { 
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
            self::getGallery();
            if($row=self::$galleryById[$id]) { 
                array_push($bread,array('title'=>$row['title'],'link'=>self::getCanonical($row['id'],$row['title'])));
            }
        }
            
        return $bread;
    }
}
