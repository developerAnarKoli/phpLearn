<?php

// $text = "<h1>hello worl</h1>";
// echo $text;
// var_dump($text);

// $string = filter_var($text, FILTER_SANITIZE_STRING);
// var_dump($string);


$course_fee = "3000";

// if(!filter_var($course_fee, FILTER_VALIDATE_INT)==false){
//     echo "this is integer";
// }else{
//     echo "this is not integer";
// }



if(filter_var($course_fee, FILTER_VALIDATE_INT)==true){
    echo "this is integer";
}else{
    echo "this is not integer";
}

?>