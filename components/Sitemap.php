<?php

/**
 * Description of Sitemap
 *
 * @author Liza
 */
class Sitemap {
    private $lines=array();
    private $now;

    const SITE='http://www.спб-ремонтпро.рф';
    
    function __construct() {
        $this->now= new DateTime();
    }


    private function addLine($link,$priority='0.8') {
        if(!$this->lines[$link])
            $this->lines[$link]=array('loc'=>$link,'lastmod'=>$this->now->format('Y-m-d'),'priority'=>$priority);
    }

    private function makeXML() {
        $xmlPath=ROOT.'/sitemap.xml';
        $xml='<?xml version="1.0" encoding="UTF-8"?>
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
    ';
        foreach($this->lines as $id=>$line) {
            $xml.='
        <url>
            <loc>'.self::SITE.$line['loc'].'</loc>
            <lastmod>'.$line['lastmod'].'</lastmod>
            <priority>'.$line['priority'].'</priority>
        </url>';
        }
        $xml.='</urlset>';
        $fp= fopen($xmlPath,'w');
        fwrite($fp, $xml);
        fclose($fp);
    }
            

    public function execute() {
        $res=Db::getQuery('select * from pages',Db::FETCH_ASSOC);
        while($rw = $res->fetch())
                $this->addLine('/'.$rw['pul']);
        
       foreach(Item::getAllItems() as $id=>$rw) 
            $this->addLine($rw['canonical'],'1');
        
        $res = Blog::getBlogs();
        foreach($res as $id=>$rw)
            $this->addLine($rw['link']);

        $res=Gallery::getAlboms();
        foreach($res['alboms'] as $id=>$rw) 
            $this->addLine($rw['canonical']);
        
        $this->makeXML();
    }    
}

define('ROOT', dirname(__FILE__).'/../');
require_once ROOT.'/components/Autoload.php';
spl_autoload_register(array('Autoload','loadPackages'));
require_once ROOT.'/components/func.php';

$sitemap=new Sitemap();
$sitemap->execute();
