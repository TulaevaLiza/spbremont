<?php

/**
 * Description of Slider
 *
 * @author Liza
 */
class Slider {
    public static function getSlider() {
       $query="select * from slider where 1 order by num";
       $res=Db::getQuery($query,Db::FETCH_ASSOC);
        
        while($row=$res->fetch())
            $data[]=$row;            

        return $data;        
    }
}
