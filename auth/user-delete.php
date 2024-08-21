<?php
require_once("db/config.php");
$id = $_GET['id'];

$query = "DELETE FROM user WHERE id = $id";
$sql = $conn->query($query);

if($sql==true){
    header("location: user-all.php?msg= Deleted successfully");
}else{
    header("location: user-all.php?msg= Deleted is not done");
}




?>