<?php

namespace App\Model;

use PDO;

class Connection{
    public $con;

    public function __construct()
    {
        $this->connect();
    }
    public function connect(){
        if (!$this->con) {
            $this->con = new PDO('mysql:host='.DB_HOST.';dbname='.DB_USER,DB_PASS,DB_NAME);
        }
    }
}

