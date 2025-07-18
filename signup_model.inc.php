<?php
  
  declare(strict_types=1);


function get_name(object $pdo, string $name)
{
     $query="SELECT name FROM signup WHERE name= :name ;";
     $stmt = $pdo->prepare($query);
     $stmt->bindParam(":name", $name);

     $stmt->execute();

     $result = $stmt->fetch(PDO::FETCH_ASSOC);
     return $result;
}

function get_email(object $pdo, string $email)
{
     $query="SELECT email FROM signup WHERE email= :email;";
     $stmt = $pdo->prepare($query);
     $stmt->bindParam(":email", $email);

     $stmt->execute();


     $result = $stmt->fetch(PDO::FETCH_ASSOC);
     return $result;
}

function set_user(object $pdo, string $name, string $pwd, string $email, string $age,string $phone)
{
    $query="INSERT INTO signup (name,password,email,age,phone_no) VALUES
    (:name,:pwd,:email,:age,:contacts)";
    $stmt = $pdo->prepare($query);

      $options = [
        'cost' => 12
      ];

      $hashedPwd = password_hash($pwd,PASSWORD_BCRYPT,$options);

      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":pwd", $hashedPwd);
      $stmt->bindParam(":email", $email);
      $stmt->bindParam(":age", $age);
      $stmt->bindParam(":contacts",$phone);
      
      $stmt->execute();

      return true;
}