<?php
$name = "mohamaddd shaifuddin"; //global scope
$address = "nanupur";

function getAdress(){
    $name = "mohamaddd shaifuddin";// local scope
    echo $name;
}

getAdress();
?>