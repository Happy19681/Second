<?php
$dns= "mysql:host=localhost;dbname=test";
$user = "root";
$password = "";

    try {
        $pdo = new PDO ($dns,$user,$password,);
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo"Connection Failed:".$e->getMessage();
    }
