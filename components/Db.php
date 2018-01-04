<?php



/**
 * Description of DB
 *
 * @author Liza
 */
class Db {    
    private static $db=NULL;
    const FETCH_ASSOC=1;

    private function _construct() {}
    private function _clone() {}

    public static function getConnection() 
    {
        if(self::$db==NULL) {
            include_once ROOT.'/config/db.php';
            self::$db=new PDO("mysql:host=$host;dbname=$db_name",$user,$pwd);
        }
        return self::$db;
    }
    public static function getQuery($query,$mode="")
    {     
        $dblink=self::getConnection();
        $res=$dblink->query($query);
        if($mode==self::FETCH_ASSOC) $res->setFetchMode(PDO::FETCH_ASSOC);
        return $res;
    }
}