<?php
//class 15

// array is contains multiple value in a variable.it will be start array();we have to use comma end of per value
// $stu_info = array("mohammad shaifuddin", "189000000", "ctg");
// var_dump($stu_info);

// //null 
// //null means no data.it is just a datatype.
// $rahim = null;
// var_dump($rahim);

//array kind of 3
//1. indexing array [array serial number or role number bola jai ja 0 teke suru hoy]
//2. associative array
// 3. multidaimentional array

$infos = array("mohammad shaifuddin", "nanupur", "016999999", 34); //indexing array write to use comma

// var_dump($infos); //all of show up like array number, indexing number, value and value type.
// print_r($infos); //print_r show up value and indexing number
// echo count($infos); //count show up just array count number
// echo $infos[3]; // use for single one value
foreach($infos as $single_value){
    echo $single_value ."<br>";
} /// use for all value show up one by one

?>