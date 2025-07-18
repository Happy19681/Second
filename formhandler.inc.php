<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST["name"]);
    $pwd = $_POST["password"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $phone = $_POST["contacts"];

    try {
        require_once "db.inc.php";

        //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //    throw new InvalidArgumentException("Invalid email format");
       // }

        $query = "INSERT INTO signup(name,password,email,age,phone_no) VALUES(?,?,?,?,?);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":age", $age);
        $stmt->bindParam(":contacts",$phone);

        $stmt->execute();

        $pdo = null;
        $stmt = null;


        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query Failed" . $e->getMessage());
    }
} else {
    header("Location:../index.php");
}
