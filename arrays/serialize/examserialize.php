<?php
$students = $_GET['students'];


// var_dump($students);
// exit();
// $student_list = ['mohammad', 'shaifuddin', 'karim'];

$list_data = serialize($students);
echo $list_data;


?>