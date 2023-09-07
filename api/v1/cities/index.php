<?php
include_once "C:/xampp/htdocs/temp/Iran/loader.php";
use \App\Services\CityService;
use \App\Utilities\Response;

$cs = new CityService();
$result = $cs->getCities((object)[1,2,33,444,55]);
Response::respondAndDie($result,Response::HTTP_OK);