<?php

//class 40

// $list = array ("e","g","t","w","a","x","z","y");
// sort($list);
// $list = array(4,2,6,15,3,7,);
// // rsort($list);
// //sort($list);
// rsort($list);

// foreach($list as $single_value){
//     echo $single_value ."<br>";
// }

/*associative array*/

$personal_info = array(
    'name' => "mohammad shaifuddin",
    'id' => "34",
    'cell_number' => "01690000",
    'z' => "z",
    'a' => "a",
);
// ksort($personal_info);
// krsort($personal_info);
// asort($personal_info);
arsort($personal_info);
foreach($personal_info as $key => $value){
    echo $value ."</br>";
}

?>