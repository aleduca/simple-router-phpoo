<?php
namespace app\controllers;

class ContactController extends Controller
{
    public function index()
    {
        $this->view('contact');
    }
    
    
    public function store($params)
    {
        var_dump($params->email)   ;
    }
}
