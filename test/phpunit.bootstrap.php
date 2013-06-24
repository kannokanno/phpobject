<?php

// For composer
require_once dirname(__FILE__) .'/../vendor/autoload.php';

// テストクラス対象のオートロードなどもここに書く

ini_set('date.timezone', 'Asia/Tokyo');
spl_autoload_register(function ($class) {
    $filePath = __DIR__ . '/../src/' . $class . '.php';
    if(file_exists($filePath)){
        require_once $filePath;
    }
});
