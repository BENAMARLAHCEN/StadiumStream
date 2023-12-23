<?php

namespace App\Controller;

abstract class Controller{

    public function index(){

    }

    protected function view($view,$data = [])
    {
        include "../app/view/layouts/main.php";
    }
   
    protected function adminView($view,$data = [])
    {
        include "../app/view/layouts/dashboard.php";
    }

}