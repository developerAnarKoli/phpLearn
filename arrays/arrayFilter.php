<?php

//class 17 array playlist
 
$numbers = array(1,23,4,5,6,7,8,44,3,6,9);

// if(!function_exists('check_odd')){
//     function check_odd($var){
//         return !($var & 1);
//     }
// }



// $getOddNumber = array_filter($numbers,'check_odd' );

// print_r($getOddNumber);

if(!function_exists('check_even')){
    function check_even($var){
        return !($var & 1);
    }
}



$myevenNumber = array_filter($numbers, 'check_even');

print_r($myevenNumber);
?>