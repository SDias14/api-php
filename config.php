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
    echo "Error: ".$e->getMessage();
    exit;
}

// Array to return

$array = [
    'error' => '',
    'result' => []
];

?>