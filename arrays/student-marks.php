<?php
$student_mark = array(
    'Maths' => 89,
    'physics' => 84,
    'chemistry' => 90,
    'computer' => 80,
    'Islamic' => 95
);
// $change_key = array_change_key_case($student_mark, CASE_LOWER);
$change_key = array_change_key_case($student_mark,CASE_UPPER);
foreach($change_key as $subject => $marks_number){
    echo $subject . " = " . $marks_number . "<br>";
}

?>