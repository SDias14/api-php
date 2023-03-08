<?php

// Database configuration

$host = 'localhost';
$name = 'devsnotes';
$user = 'root';
$pass = '';


// Connection

try {
    $pdo = new PDO("mysql:dbname=".$name.";host=".$host, $user, $pass);
} catch (PDOException $e) {
    echo "Error: Contate o administrador do sistema";
    exit;
}

// Array to return

$array = [
    'error' => '',
    'result' => []
];

?>