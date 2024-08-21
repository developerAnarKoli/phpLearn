<?php

//class 12 of array list

$username = array("mohammad", "shaifuddin", "karim");
$id = array ("1", "2", "3");

//$array_com_asso = array_combine($id, $username);
$array_com_asso = array_combine($username,$id);
print_r($array_com_asso);

?>