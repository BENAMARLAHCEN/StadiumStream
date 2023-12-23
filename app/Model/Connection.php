<?php

namespace App\Model;

use PDO;
use PDOException;

class Connection
{
    public $pdo;

    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {

        if (!$this->pdo) {
            try {
                $this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            } catch (PDOException $e) {
                $this->logError($e);
                return null;
            }
        }
    }
    
    protected function logError(PDOException $e)
    {
        $logFilePath = dirname(__DIR__ . '../') . '\logs\error.log';
        $errorMessage = "[" . date('Y-m-d H:i:s') . "] " . $e->getMessage() . "\n";
        file_put_contents($logFilePath, $errorMessage, FILE_APPEND);
    }

    protected function logQuery($query)
    {
        $logFilePath = dirname(__DIR__ . '../') . '\logs\query.log';

        $logMessage = "[" . date('Y-m-d H:i:s') . "] " .  $query . "\n";
        file_put_contents($logFilePath, $logMessage, FILE_APPEND);
    }
}
