<?php

//array class 10

$infos = array(

    'key' => "Value",
    'name' => "mohammad shaifuddin",
    'cell_number' => "0169000534",
    'email' => "shaifupolite@gmail.com",
    'website' => "developershaif.com"
);

$array_divided = array_chunk($infos, 2);

var_dump($array_divided);

?>