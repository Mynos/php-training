<?php

define('APPDIR', 'oop');
define('BASEDIR', realpath(dirname(__FILE__).   '/../'.APPDIR.'/'));

function __autoload($classname) {
    $className = ltrim($classname,'\\');
    $fileName = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className,0,$lastNsPos);
        $className = substr($className, $lastNsPos+1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace).DIRECTORY_SEPARATOR;
        
    }
    
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';
    require_once BASEDIR.DIRECTORY_SEPARATOR.$fileName;
    //echo  BASEDIR.DIRECTORY_SEPARATOR.$fileName;
    
}
//__autoload('\Tablet\App');
?>

