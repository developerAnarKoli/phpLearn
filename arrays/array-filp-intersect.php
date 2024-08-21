<?php
//class 20 and 21 array of playlist
$personal_info = array(
    'id' => "10",
    'name' => "mohamad shaifuddin",
    'email' => "shaifupolite@gmail.com",
    'cell' => "02432483247"
);

// $key_change = array_flip($personal_info);
// print_r($key_change);


/*arrray of value matche between one and two with intersect/intersect_assoc/intersect_key*/

$personal_info_one = array(
    'id' => "10",
    'name' => "rahim",
    'email' => "rahim@gmail.com",
    'cell' => "02432483247"
);
$personal_info_two = array(
    'id' => "11",
    'name' => "mohamad shaifuddin",
    'email' => "shaifupolite@gmail.com",
    'cell' => "02432483247"
);

//$match = array_intersect($personal_info_one,$personal_info_two);
//$match = array_intersect_assoc($personal_info_one,$personal_info_two);
$match = array_intersect_key($personal_info_one,$personal_info_two);
print_r($match);


?>