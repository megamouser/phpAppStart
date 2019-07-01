<?php
namespace Core\Engine\Components\MainComponents;

class Helper
{
    public static function view($name, $data = [])
    {
        extract($data);
        return require realpath(__DIR__ . "/../../../App/Views/$name.view.php");
    }

    public static function redirect($path)
    {
        header("Location: /$path");
    }

    public static function requestUri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function requestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function arrToJson(array $arr)
    {
        return json_encode($arr, JSON_UNESCAPED_UNICODE);
    }
}
