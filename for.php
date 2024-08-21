<?php
//class 30;
// $start = 0;
// $end = 20;

// for($start; $start<=$end; $start++){
//     echo "$start serial number </br>";
// }
// $start = 0;
$info = array("mohmmad shaifuddin", "nanupur", 01600000, 298748);

// var_dump($info);

$array_count_number = count($info);
// echo $array_count_number;
// echo $info[0] ."<br>";
// echo $info[1] . "<br>";
for($start=0; $start<$array_count_number; $start++){
    echo $info[$start]."<br>";
}

$i = 0;

$info = array("student", "id", 134, 565,);
$array_count_number = count($info);

for($i; $i<$array_count_number; $i++){
    echo $info[$i]."<br>";
}
?>