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

$Laravel7xRequire=array(
    'phpversion'=>'PHP >= 7.2.5',
    'bcmath'=>"True",
    'ctype'=>"True",
    'fileInfo'=>"True",
    'json'=>"True",
    'mbString'=>"True",
    'openSSL'=>"True",
    'tokenizer'=>"True",
    'xml'=>"True",
    'pdo'=>"True"
);

$Laravel6xRequire=array(
    'phpversion'=>'PHP >= 7.2.0',
    'bcmath'=>"True",
    'ctype'=>"True",
    'fileInfo'=>"True",
    'json'=>"True",
    'mbString'=>"True",
    'openSSL'=>"True",
    'tokenizer'=>"True",
    'xml'=>"True",
    'pdo'=>"True"
);


$Laravel58Require=array(
    'phpversion'=>'PHP >= 7.1.3',
    'bcmath'=>"True",
    'ctype'=>"True",
    'fileInfo'=>"Not Required",
    'json'=>"True",
    'mbString'=>"True",
    'openSSL'=>"True",
    'tokenizer'=>"True",
    'xml'=>"True",
    'pdo'=>"True"
);

$Laravel57Require=array(
    'phpversion'=>'PHP >= 7.1.3',
    'bcmath'=>"True",
    'ctype'=>"True",
    'fileInfo'=>"Not Required",
    'json'=>"True",
    'mbString'=>"True",
    'openSSL'=>"True",
    'tokenizer'=>"True",
    'xml'=>"True",
    'pdo'=>"True"
);

$Laravel56Require=array(
    'phpversion'=>'PHP >= 7.1.3',
    'bcmath'=>"Not Required",
    'ctype'=>"True",
    'fileInfo'=>"Not Required",
    'json'=>"True",
    'mbString'=>"True",
    'openSSL'=>"True",
    'tokenizer'=>"True",
    'xml'=>"True",
    'pdo'=>"True"
);

$Laravel55Require=array(
    'phpversion'=>'PHP >= 7.0.0',
    'bcmath'=>"Not Required",
    'ctype'=>"Not Required",
    'fileInfo'=>"Not Required",
    'json'=>"Not Required",
    'mbString'=>"True",
    'openSSL'=>"True",
    'tokenizer'=>"True",
    'xml'=>"True",
    'pdo'=>"True"
);
function CurrentConfig(){
    $phpversion=phpversion();
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
        'phpversion'=>$phpversion,
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


