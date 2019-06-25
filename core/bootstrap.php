<?php
require_once __DIR__ . "/../vendor/autoload.php";
use Core\Engine\Components\MainComponents\Handler;
use Core\Engine\Components\Zadarma\Api;
use Core\Engine\Components\Zadarma\Client;
use Core\Engine\Components\Zadarma\Response\Response;
use Core\Engine\Components\Zadarma\Response\Balance;

$response = new Response("test");
$balance = new Balance("test");
print_r($balance);