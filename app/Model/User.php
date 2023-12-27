<?php
namespace App\Model;

class User extends Crud{

    private int $id;
    public function __construct()
    {
        parent::__construct();
    }
    
}
