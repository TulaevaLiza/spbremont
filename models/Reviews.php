<?php

/**
 * Description of Reviews
 *
 * @author Liza
 */
class Reviews {
   public static function getReviews($limit=0) {
        $query="select * from reviews".($limit>0?" limit 0,".$limit:"");
        $res=Db::getQuery($query,Db::FETCH_ASSOC);
       
        $ids=array();
        while($row=$res->fetch())
        {
            $row['link']="/отзывы/".$row['id'];
            $row['date_format']=formatDate($row['date']);
            $row['short_text']=substr($row['text'],0,355).'...';
            $data[]=$row;
        }
        
        return $data;        
    }
}
