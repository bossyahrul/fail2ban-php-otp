<?php
    require_once('php-otp/code/rfc6238.php');
    
    $code       = $_POST['c'];
    $username   = $_POST['username']; 
    $password   = $_POST['password']; 

    $secret_key     = 'GEZDGNBVGY3TQOJQGEZDGNBVGY3TQOJQ';
    $current_code   = $code;

    if (TokenAuth6238::verify($secret_key, $current_code)) {
        if ($username == "beny" && $password == "beny123") {
            echo "Code is valid !";
        } else {
            echo "Username & password is invalid | Code Verify";
        }
    } else {
        if ($username == "beny" && $password == "beny123") {
            echo "Code is valid !";
        } else {
            echo "Username & password is invalid | Code Verify";
        }
    }

?>