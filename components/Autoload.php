<?php

/**
 * Description of Autoload
 *
 * @author Liza
 */
class Autoload {
    private static $paths=array('/models/','/components/');
    private static $lastLoadedFile;
    
    public static function loadPackages($className) {
        foreach(self::$paths as $path) {
            self::$lastLoadedFile=ROOT.$path.$className.'.php';
            if(is_file(self::$lastLoadedFile))
                include_once self::$lastLoadedFile;
        }
    }
    
}
