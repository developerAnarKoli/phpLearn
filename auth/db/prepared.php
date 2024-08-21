<?php
//class 164

require_once("config.php");

$myquery = $conn->prepare("INSERT INTO user(username,email,password) VALUES(?,?,?)");

$myquery->bind_param("sss",$username,$email,$password);

$username = "mohammad sagor chowdury";
$email = "sagar@gmail.com";
$password = "44444";

$myquery->execute();
echo "data save successfully";

$myquery->close();
$conn->close();
?>