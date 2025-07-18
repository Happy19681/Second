<?php

if ($_SERVER["REQUEST_METHOD"] =="POST") {

    $name= $_POST["name"];
    $pwd= $_POST["password"];

    try {
          
        require_once 'db.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_controller.inc.php';
        
         //ERROR HANDLERS
         $errors =[];

        if (is_input_empty( $name, $pwd, $email, $age, $phone)) {
            $errors["empty_input"] = " Fill in all fields";
        }

        $result= get_user( $pdo, $name);

        if (is_name_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect login info";
        }

        if (is_name_wrong($result) && is_password_wrong($pwd,$result["pwd"])) {
            $errors["login_incorrect"] = "Incorrect login info";
        }


        if (is_email_invalid($email)) {
            $errors["invalid_email"] = " Invalid email used!";
        }
        

        require_once 'config_session.inc.php';

        if ($errors) {
              $_SESSION["errors_signup"] = $error;

              header("Location:../indexes.php");
              die();
        }

        $newSessionId = session_create_id();
        $sessionId =  $newSessionId . "_" . $result["di"];
         session_id( $sessionId);

         $_SESSION["signup_id"] = $result ["id"];
         $_SESSION["user_name"] =  htmlspecialchars($result ["name"]);
    

         $_SESSION["last_regeneration"] = time();
         header("Location:../indexes.php?login=success");
          $pdo=null;
          $stmt=null;

          die();


    } catch (PDOException $e) {
        die("Query Failed". $e->getMessage());
    }
} else{
    header("Location:../indexes.php");
    die();
}
