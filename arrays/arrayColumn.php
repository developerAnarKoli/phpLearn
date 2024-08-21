<?php

//class 11 for array

$column = array(
    array(
        'id'  => "1",
        'username' => "shaifudddin",
        'cell' => "0159787",
    ),
    array(
        'id' => "2",
        "username" => "karim",
        'cell' => "73248973847",

    ),
    array('id' => "3",
    'username' => "abdullah",
    "cell" => "084783")
);

$columnDivided = array_column($column,'username', 'id');
 print_r($columnDivided);
// var_dump($columnDivided);

?>