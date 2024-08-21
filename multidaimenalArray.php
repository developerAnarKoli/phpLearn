<?php
 $person_info = array(
    'name' => "mohammad shaifuddin",
    'addrss' => array(
        'house' => "10",
        'road' => "5",
        'barri' => array(
            'barirName' => "khurshed chowdury bari",
            'muhalla' => "noyabar",
        ),
    ),
 );
// var_dump($person_info);

echo $person_info["addrss"]["barri"]["barirName"];

?>