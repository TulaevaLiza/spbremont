<?php

/**
 * Description of Redirect
 *
 * @author Liza
 */
class Redirect {
    private $redirect;
    public function __construct() {
         $redirectPath=ROOT.'/config/redirect.php';
         $this->redirect= include($redirectPath);
    }
    
    private function getURI() {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return urldecode(trim($_SERVER['REQUEST_URI']));                
        }
    }    
    public function run() {
        $uri = $this->getURI();

        foreach($this->redirect as $pattern=>$path) {
            if(preg_match("/^".$pattern."/",$uri)) {
/*                echo 'redirect '.$pattern.' -> '.$path;
                exit(0);*/
                header('HTTP/1.1 301 Moved Permanently');
                header('Location: '.$path);
                exit(0);
            }
        }
    }
}
