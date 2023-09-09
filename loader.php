<?php

# cache constants
define('CACHE_ENABLED',0);
define('CACHE_DIR',__DIR__."\\cache\\");

# Authorization Constants
define('JWT_KEY', '7LearnIranKey78dfndfj*d7*dHH');
define('JWT_ALG', 'HS256');

require 'vendor/autoload.php';
include_once "App/iran.php";

use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\ValidationData;

spl_autoload_register(function ($class){
    $class_file = __DIR__ . "/" . $class . ".php";
    if(!(file_exists($class_file) and is_readable($class_file))){
        die("$class not found");
    }
    include_once $class_file;
});

//use \App\Services\CityService;
//use \App\Utilities\Response;

//new CityService();
//Response::respond([1,23],200);
