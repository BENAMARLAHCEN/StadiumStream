<?php
require_once '../vendor/autoload.php'; // Include Composer autoloader

use Dotenv\Dotenv;
// Load environment variables from .env file
$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();
// Application
define('APP_URL', 'http://localhost/documentation/StadiumStream/');
define('LOG_URL', 'C:\laragon\www\documentation\StadiumStream\app');

// Database
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);
define('DB_NAME', $_ENV['DB_NAME']);
