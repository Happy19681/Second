<?php

declare( strict_types=1);


function get_user( object $pdo,string $name){
 
    $query="SELECT * FROM signup WHERE name= :name ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":name", $name);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}