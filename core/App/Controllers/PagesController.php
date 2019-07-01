<?php
namespace Core\App\Controllers;
use Core\Engine\Components\MainComponents\Helper;

class PagesController
{
    public function home()
    {
        return Helper::view('home');
    }

    public function request()
    {
        print_r('request');
    }
}