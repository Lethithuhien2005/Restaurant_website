<?php
    $dsn = 'mysql:host=localhost; dbname=website_restaurant';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = $e->getMessage();
        include ('database_error.php');
        exit();
    }
?>