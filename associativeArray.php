<?php
//class 37

/*associative 
$variable = array ('key' => "value hera",) 
*/

$person_info = array(
    "name" => "mohammad shaifuddin",
    "id" => "34",
    "cellNumber" => "0169999999",
    "nationality" => "Bangladeshi"
);
// var_dump($person_info);
// print_r($person_info);
// echo $person_info['name'];
// echo $person_info['id'];
foreach($person_info as $single_key => $single_value){
    // echo $single_key . "<br>";
    // echo $single_value . "<br>";
    echo "$single_key :" . " " . "$single_value <br>";
}
?>