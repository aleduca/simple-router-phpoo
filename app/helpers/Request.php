<?php
namespace app\helpers;

class Request
{
    public static function get():string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
