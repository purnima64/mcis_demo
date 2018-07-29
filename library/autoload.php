<?php
define("PROJECT", "mcis");
final class Load 
{
    public static function view($filename, $data) {
        $data =$data;
        include_once ($_SERVER['DOCUMENT_ROOT']."/".PROJECT.'/view/'.$filename.'.php');
        
    }
}

    if(!function_exists('libAutoLoader')){
        function libAutoLoader($class){
            $class=($class);
            $classFile=$_SERVER['DOCUMENT_ROOT']."/".PROJECT.'/library/'.$class.'.php';
            if(is_file($classFile)&&!class_exists($class)) include_once $classFile;
        }
    }
    spl_autoload_register('libAutoLoader');
    
    if(!function_exists('BLAutoLoader')){
        function BLAutoLoader($class){
            //$class=strtolower($class);
            $classFile=$_SERVER['DOCUMENT_ROOT']."/".PROJECT.'/businesslayer/'.$class.'.php';
            if(is_file($classFile)&&!class_exists($class)) include_once $classFile;
        }
    }
    spl_autoload_register('BLAutoLoader');
    
    if(!function_exists('DLAutoLoader')){
        function DLAutoLoader($class){
            $class=strtolower($class);
            $classFile=$_SERVER['DOCUMENT_ROOT']."/".PROJECT.'/datalayer/'.$class.'.php';
            if(is_file($classFile)&&!class_exists($class)) include_once $classFile;
        }
    }
    spl_autoload_register('DLAutoLoader');
    
    if(!function_exists('InterfaceAutoLoader')){
        function InterfaceAutoLoader($class){
            $class=strtolower($class);
            $classFile=$_SERVER['DOCUMENT_ROOT']."/".PROJECT.'/interface/'.$class.'.php';
            if(is_file($classFile)&&!class_exists($class)) include_once $classFile;
        }
    }
    spl_autoload_register('InterfaceAutoLoader');