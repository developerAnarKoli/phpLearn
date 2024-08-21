<?php

$email = "shaifupolite@gmail.com";

$person_email = filter_var($email, FILTER_SANITIZE_EMAIL);



if(filter_var($person_email, FILTER_VALIDATE_EMAIL)){
    echo "this is perfect email";
}else{
    echo "this is wrong email.";
}


?>