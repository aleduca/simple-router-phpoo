<?php
namespace app\controllers;

class ProductController
{
    public function index($params)
    {
        var_dump($params->name)   ;
    }
    public function update()
    {
        var_dump('update product testeeeee')   ;
    }
}
