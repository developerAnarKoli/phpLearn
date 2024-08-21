<?php
//class 171-172
require_once("config.php");
$id = $_GET['id'];

echo $username = $_POST['username'];
echo $email = $_POST['email'];

$query = "UPDATE user SET username = '$username', email = '$email' WHERE id = $id ";

$sql = $conn->query($query);

if($sql==true){
    header("location: showallUser.php?msg=updare successfully done");
}else{
    header("location: showallUser.php?msg=the text is not updated");
}


?>