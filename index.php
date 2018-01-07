<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once ROOT.'/components/Autoload.php';
spl_autoload_register(array('Autoload','loadPackages'));

require_once ROOT.'/components/func.php';

$redirect=new Redirect();
$redirect->run();

$router=new Router();
$router->run();

?>