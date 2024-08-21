<?php
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$description = $_POST["description"];
$gender = $_POST["gender"];
// $course = $_POST["course"];
// var_dump($course);
$coursefee = $_POST["coursefee"];
$cell = $_POST["cell"];
$color = $_POST["color"];
$BirthDate = $_POST["birthDate"];
$classTime = $_POST["classTime"];
$fburl = $_POST["fburl"];


$selectmonth = $_POST["selectMonth"];
$imagefile = $_FILES["imagefile"]["type"];
var_dump($imagefile);
$userip = $_POST["userip"];

$price_range = $_POST["price_range"];
$selectweek = $_POST["selectweek"];
$localTime = $_POST["localTime"];


$Web_course = $_POST["Web_course"];

var_dump($Web_course);

echo $username. "<br>" . $email . "<br>". $password . "<br>" . $description . "<br>" . $gender . "<br>" . /*$course .*/ "<br>" . $coursefee . "<br>" . $cell . "<br>" . $color . "<br>" . $BirthDate . "<br>" . $classTime ."<br>" .$fburl . "<br>" . $selectmonth . "<br>" . $userip . "<br>" . $price_range . "<br>" . $selectweek . "<br>" . $localTime;



?>