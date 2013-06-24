<?php
/**
 * Created by IntelliJ IDEA.
 * User: shunsuke
 * Date: 2013/05/31
 * Time: 6:57
 * To change this template use File | Settings | File Templates.
 */
spl_autoload_register(function ($class) {
    $filePath = __DIR__  . $class . '.php';
    if(file_exists($filePath)){
        require_once $filePath;
    }
});