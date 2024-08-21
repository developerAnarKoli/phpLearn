<?php
//class 35


function getFullName ( $first_name,$last_name){
    // $first_name = "mohammad";
    // $last_name = "shaifuddin";
    return $first_name ." " . $last_name;
}
// getFullName();

function totalPrice($price=0,$qty=0){
    // $price = 100;
    // $qty = 3;
    $total = $price*$qty;
    echo  $total;

}

?>