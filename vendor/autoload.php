<?php
/**
 * Created by PhpStorm.
 * User: breeze
 * Date: 16/10/26
 * Time: 16:26
 */
class Flow_Autoload{
    public static function load($class_name){
        $filename = __DIR__.'/'.str_replace('\\','/',$class_name).'.php';

        if(file_exists($filename)){
            require_once($filename);
            return true;
        }else {
            return false;
        }

    }
}

spl_autoload_register([new Flow_Autoload(), 'Load']);