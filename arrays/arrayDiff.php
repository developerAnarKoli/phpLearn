<?php
//class 15 of array playlist

/* array_diff //this is different with values
    array_diff_assoc //this is diffent with key between values
    array_diff_key //this deffent with key
    array_fill*/ //this is fill up the index number

$fist = array(
    'aa' => 50,
    'b' => 60,
    'c' => 70,
    'rr' => 90,
);
$second = array(
    'a' => 50,
    'b' => 60,
    'c' => 70,
);

// $array_different = array_diff($fist,$second);
// $array_different = array_diff_assoc($fist,$second);
$array_different = array_diff_key($fist,$second);

var_dump($array_different);


?>