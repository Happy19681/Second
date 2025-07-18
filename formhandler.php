<?php
//var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=htmlspecialchars($_POST["name"]);
    $password=htmlspecialchars($_POST["password"]);
    $email=htmlspecialchars($_POST["email"]);
    $age=htmlspecialchars($_POST["age"]);
    $number=htmlspecialchars($_POST["contacts"]);

    if (empty($email)){
        exit();
    }

    echo"Data Submitted";
    echo"<br>";
    echo"$name";
    echo"<br>";
    echo"$password";
    echo"<br>";
    echo"$email";
    echo"<br>";
    echo"$age";
    echo"<br>";
    echo"$number";

}
else{
    header("Location:..index.php");
}