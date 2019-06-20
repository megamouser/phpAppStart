<?php
require_once __DIR__ . "/../vendor/autoload.php";
use Core\Engine\Components\MainComponents\Handler;
use Core\Engine\Components\Zadarma\Api;
use Core\Engine\Components\Zadarma\Client;

$classTest = new Client('key', 'secret');
var_dump($classTest);