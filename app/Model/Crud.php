<?php

namespace App\Model;

use PDO;
use PDOException;

class Crud extends connection
{

    public function __construct()
    {
        parent::connect();
    }
    // use connection;
    public function selectRecords(string $table, string $columns = "*", string $where = null)
    {

        try {
            // Use prepared statements to prevent SQL injection
            $sql = "SELECT $columns FROM $table";

            if ($where !== null) {
                $sql .= " WHERE $where";
            }
            $this->logQuery($sql);

            // Prepare the SQL query
            $stmt = $this->pdo->prepare($sql);

            // Execute the prepared statement with any bound parameters
            $stmt->execute();

            // Fetch the result set as an associative array
            $result = $stmt->fetchAll( PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            $this->logError($e);
            return null;
        }
    }
    public function insertRecord(string $table, array $data)
    {
        // Use prepared statements to prevent SQL injection
        $columns = implode(', ', array_keys($data));

        $placeholders = implode(', ', array_fill(0, count($data), '?'));

        try {
            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

            $this->logQuery($sql);

            $stmt = $this->pdo->prepare($sql);


            // Bind parameters to the prepared statement by reference
            $i = 1;
            foreach ($data as $key => &$value) {
                $stmt->bindParam($i, $value);
                $i++;
            }
            $stmt->execute();
            // Execute the prepared statement
            // if ($stmt->execute()) {
            //     // Get the ID of the last inserted row (if applicable)
            //     $lastInsertId = $this->pdo->lastInsertId();
            return true;
        } catch (PDOException $e) {
            $this->logError($e);
            return false;
        }
    }

    public function updateRecord($table, $data, $id)
    {
        // Use prepared statements to prevent SQL injection
        $args = array();

        foreach ($data as $key => $value) {
            $args[] = "$key = ?";
        }
        try {
            $sql = "UPDATE $table SET " . implode(',', $args) . " WHERE id = ?";

            $this->logQuery($sql);

            $stmt = $this->pdo->prepare($sql);

            if (!$stmt) {
                die("Error in prepared statement: " . $this->pdo->errorInfo()[2]);
            }

            // Bind parameters to the prepared statement

            $i = 1;
            foreach ($data as $key => &$value) {
                $stmt->bindParam($i, $value);
                $i++;
            }
            $stmt->bindParam($i, $id);



            // Execute the prepared statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            $this->logError($e);
            return false;
        }
    }
    public function deleteRecord(string $table, int $id)
    {
        try {
            // Use prepared statements to prevent SQL injection
            $sql = "DELETE FROM $table WHERE id = ?";
            $this->logQuery($sql);
            $stmt = $this->pdo->prepare($sql);



            // Bind parameters to the prepared statement
            $stmt->bindParam(1, $id);

            // Execute the prepared statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            $this->logError($e);
            return false;
        }
    }

    // private function logError(PDOException $e)
    // {
    //     $logFilePath = dirname(__DIR__ . '../') . '\logs\error.log';
    //     $errorMessage = "[" . date('Y-m-d H:i:s') . "] " . $e->getMessage() . "\n";
    //     file_put_contents($logFilePath, $errorMessage, FILE_APPEND);
    // }

    // private function logQuery($query)
    // {
    //     $logFilePath = dirname(__DIR__ . '../') . '\logs\query.log';

    //     $logMessage = "[" . date('Y-m-d H:i:s') . "] " .  $query . "\n";
    //     file_put_contents($logFilePath, $logMessage, FILE_APPEND);
    // }
}

// private function logError(PDOException $e)
// {
//     $logFilePath = LOG_URL . '\logs\error.log';
//     $errorMessage = "[" . date('Y-m-d H:i:s') . "] " . $e->getMessage() . "\n";
//     file_put_contents($logFilePath, $errorMessage, FILE_APPEND);
// }

// private function logQuery($query)
// {
//     $logFilePath = LOG_URL . '\logs\query.log';

//     $logMessage = "[" . date('Y-m-d H:i:s') . "] " . $query . "\n";
//     file_put_contents($logFilePath, $logMessage, FILE_APPEND);
// }