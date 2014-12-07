<?php
ini_set('display_errors',1);

/**
 * Created by PhpStorm.
 * User: mockie
 * Date: 12/8/14
 * Time: 4:54 AM
 */

spl_autoload_register(function ($classname) {
    $classname = ltrim($classname, "\\");
    preg_match('/^(.+)?([^\\\\]+)$/U', $classname, $match);
    $classname = str_replace("\\", "/", $match[1])
        . str_replace(["\\", "_"], "/", $match[2])
        . ".php";
    include_once $classname;
});