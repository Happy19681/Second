<?php   

if ($_SERVER["REQUEST_METHOD"] =="POST") {

    $name= $_POST["name"];
    $pwd= $_POST["password"];
    $email= $_POST["email"];
    $age= $_POST["age"];
    $phone= $_POST["contacts"];
       
    try {
        
        require_once 'db.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_controller.inc.php';

        //ERROR HANDLERS
         $errors =[];

        if (is_input_empty( $name, $pwd, $email, $age, $phone)) {
            $errors["empty_input"] = " Fill in all fields";
        }

        if (is_email_invalid($email)) {
            $errors["invalid_email"] = " Invalid email used!";
        }
        if (is_name_taken( $pdo, $name)) {
            $errors["name_taken"] = "Name already taken!";
        }
        
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"]= "Email already taken!";
        } 

        require_once 'config_session.inc.php';

        if ($errors) {
              $_SESSION["errors_signup"] = $errors;

              $signupData =[
                       "name"=>$name,
                       "email"=>$email,
                       "age"=>$age,
                       "contacts"=>$phone,
              ];

              $_SESSION["signup_data"] = $signupData;
                
              
              header("Location:../index.php");
              die();
        }

        create_user ($pdo, $name, $pwd, $email, $age, $phone);
       
        header("Location../index.php?signup=success");

        $pdo=null;
        $stmt=null;
        
    } catch (PDOException $e) {
        die("Query Failed". $e->getMessage());
    }
    
} else {
    header("Location:../index.php");
    die();
}