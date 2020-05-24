<?php
$LaravelVersions=array(
"Laravel 7x",
"Laravel 6x",
"Laravel 5.8",
"Laravel 5.7",
"Laravel 5.6",
"Laravel 5.5",
);
$VersionArrLength = count($LaravelVersions);

$LaravelGeneral=array(
    'bcmath'=>true,
    'ctype'=>true,
    'fileInfo'=>true,
    'json'=>true,
    'mbString'=>true,
    'openSSL'=>true,
    'tokenizer'=>true,
    'xml'=>true,
    'pdo'=>true
);


function GeneralConfigCheck(){
    $bcmath=extension_loaded('bcmath');
    $ctype=extension_loaded('ctype');
    $fileInfo=extension_loaded('Fileinfo');
    $json=extension_loaded('json');
    $mbString=extension_loaded('mbstring');
    $openSSL=extension_loaded('openssl');
    $tokenizer=extension_loaded('tokenizer');
    $xml=extension_loaded('xml');
    $pdo=defined('PDO::ATTR_DRIVER_NAME');
    $GeneralArray=array(
        'bcmath'=>$bcmath,
        'ctype'=>$ctype,
        'fileInfo'=>$fileInfo,
        'json'=>$json,
        'mbString'=>$mbString,
        'openSSL'=>$openSSL,
        'tokenizer'=>$tokenizer,
        'xml'=>$xml,
        'pdo'=>$pdo
        );
    return $GeneralArray;


}


