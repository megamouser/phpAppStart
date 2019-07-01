<?php
require_once __DIR__ . "/../vendor/autoload.php";
use Core\Engine\Components\MainComponents\Helper;
use Core\Engine\Components\MainComponents\Router;

$router = new Router();
$router->get('home', 'PagesController@home');
$router->post('request', 'PagesController@request');
$router->direct(Helper::requestUri(), Helper::requestMethod());
//use Core\Engine\Components\Zadarma\Api;
//use Core\Engine\Components\Zadarma\Client;
//use Core\Engine\Components\Zadarma\Response\Response;
//use Core\Engine\Components\Zadarma\Response\Balance;


/*
$api = new \Zadarma_API\Api("7a0e120be03b10d350bb", "91790890d347860dc57a");
try {
    $statistics = $api->getStatistics();
    $pbxStatistics = $api->getPbxStatistics();
    $directNumbers = $api->getDirectNumbers();

    print_r($pbxStatistics);

    $call = $api->getPbxRecord("1561966874.445463", null);
    print_r($call);
} catch (\Zadarama_API\ApiException $e) {
    echo "Error: " . $e->getMessage();
}
*/
