<?php

require_once 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$parametros = [
    'host' => $_ENV['DB_HOST'] ?? 'localhost',
    'port' => $_ENV['DB_PORT'] ?? '3306',
    'db' => $_ENV['DB_NAME'] ?? 'rotiseria',
    'user' => $_ENV['DB_USER'] ?? 'root',
    'password' => $_ENV['DB_PASSWORD'] ?? '',
    'firebase_service_account' => json_decode($_ENV['FIREBASE_SERVICE_ACCOUNT'] ?? '{}', true),
    'jwt_secret_key' => $_ENV['JWT_SECRET_KEY'] ?? '',
    'twilio_sid' => $_ENV['TWILIO_SID'] ?? '',
    'twilio_token' => $_ENV['TWILIO_TOKEN'] ?? '',
];
