<?php
  
  declare(strict_types=1);

  function is_input_empty( string $name, string $pwd, string $email, string $age,string $phone) {

    if(empty($name) || empty($pwd) || empty($email) || empty($age) || empty($phone)){
         return true;
  } else {
     return false;
  }
}

function is_email_invalid(string $email) {

   if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
 } else {
    return false;
 }
}


function is_name_taken(  object $pdo,string $name) {

    if(filter_var( get_name( $pdo, $name))){
         return true;
  } else {
     return false;
  }
}

function is_email_registered(  object $pdo,string $email) {

    if( get_email( $pdo, $email)){
         return true;
  } else {
     return false;
  }
}

function create_user(object $pdo, string $name, string $pwd, string $email, string $age,string $phone) {

   set_user( $pdo,$name,$pwd,$email,$age,$phone);
}