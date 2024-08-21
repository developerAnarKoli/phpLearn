<?php
require_once("db/config.php");
$id = $_GET['id'];

$query = "DELETE FROM category WHERE id =$id";
$sql = $conn->query($query);

if($sql){
    header("location: cat-all.php?msg=Deleted successfully");
}else{
    header("location: cat-all.php?msg= not deleted please try again");
}
?>