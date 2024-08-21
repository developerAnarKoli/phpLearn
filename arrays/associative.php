<?php
//class 7 for array
$infos = array(
    'key' => "value",
    'name' => "mohammad shaifuddin",
    'cell_number' => "0169999",
    'gmail' => "shaifupolite@gmail.com"
);

// echo $infos['key'];
// echo $infos['name'];
// echo $infos['cell_number'];

foreach($infos as $key => $single_value){
    echo $key . "</br>";
}
?>