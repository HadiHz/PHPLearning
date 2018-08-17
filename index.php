<?php
new finalClass();

function __autoload($className){
    // in tabe vaghti ejra mishe ke mibine ye kelasi ro besh dastresi nadare
    // yani include nashode
    // ba in tabe mishe handle kard include kardan ro

    //var_dump($className);
    $fileName = "class-".$className.".php";

    $filePath = __DIR__.DIRECTORY_SEPARATOR."oop".DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR.$fileName;

    if(file_exists($filePath)){
        require_once $filePath;
    }
}