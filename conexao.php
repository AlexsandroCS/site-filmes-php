<?php 
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);

    $host = 'localhost:3306';
    $user = 'AlexsandroCS';
    $password = 'ODDY';


    // $host = 'localhost:3308';
    // $user = 'root';
    // $password = '';
    
    $database = 'fullstack';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
?>