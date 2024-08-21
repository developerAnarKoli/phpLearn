<?php
// $infos = array("mohammad shaifuddin", "nanupur", "0169000", 348.74);
// var_dump($infos);

//array kind of 3


// 1. indexed array
// 2. associative array
// 3. multidimensional array

//indexed arrays 2 vabe kore jai first example

// $personal_info = array("mohammmad shaifudding", "0154789374", "shaifupolitef@gmail.com");
// //array index 0 teke count kora hoy 
// var_dump($personal_info);
// echo "<br>" .count($personal_info);

// echo "<br>" .$personal_info[0];
// echo "<br>" .$personal_info[2];

$product[0]= "potato";
$product[1] = "2";
$product[2]= "store";

// var_dump($product);

$array_count = count($product);
// echo $array_count;

for($i=0; $i<$array_count; $i++){
    echo $product[$i] . "<br>";
}

?>