<?php
ini_set('display_errors',1);

/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 4:54 AM
 */

if(!function_exists('classAutoLoader')){
    function classAutoLoader($class){
        $class=strtolower($class);
        $dirs = ['strategy'];
        foreach ($dirs as $val) {
            $classFile=$_SERVER['DOCUMENT_ROOT'].'/'.$val.'/'.$class.'.php';
            if(is_file($classFile) && !class_exists($class)) {
                include $classFile;
            }
        }
    }
}

spl_autoload_register('classAutoLoader');