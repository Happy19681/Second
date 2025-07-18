<?php

declare(strict_types=1);

function signup_inputs(){
    if((isset($_SESSION ["signup_data"]["name"])&& !isset(["signup_data"]["name_taken"]))){

        echo'<label class="block mb-2"> Name </label>
                        <input type="text" name="name" id="name" placeholder=" Username...." class="w-full px-3 py-2 mb-3 border rounded"
                       value="'.$_SESSION ["signup_data"]["name"] .'">';
        
             } else {
                echo'<label class="block mb-2"> Name </label>
                        <input type="text" name="name" id="name" placeholder=" Username...." class="w-full px-3 py-2 mb-3 border rounded"';
             }
        
             echo'<label class="block mb-2"> Password </label>
                            <input type="password" name="password" placeholder=" Password...." class="w-full px-3 py-2 mb-3 border rounded">';
            
                            
             if((isset($_SESSION ["signup_data"]["email"])&& !isset(["signup_data"]["invalid_email"])&& !isset(["signup_data"]["invalid_email"]))){
        
                echo'<label class="block mb-2"> Email </label>
                            <input type="text" name="email" placeholder="Example@email.com" class="w-full px-3 py-2 mb-3 border rounded
                            value="'.$_SESSION ["signup_data"]["email"] .'"">';
                
                     }else{
                        echo'<label class="block mb-2"> Email </label>
                            <input type="text" name="email" placeholder="Example@email.com" class="w-full px-3 py-2 mb-3 border rounded">';
                     }        
        
        
}

    
             
                    

function  check_signup_errors()
{
    if (isset($_SESSION["errors_signup"])) {
        $errors =   $_SESSION["errors_signup"];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="form-errors">' . $error . '</p>';

        }



        unset($_SESSION["errors_signup"]);


    } elseif(isset( $_GET["signup"])&& $_GET["signup"]==="success"){
        
        echo"<br>";
        echo"<p class='form-errors'> Signup success </p>";

    }
}
