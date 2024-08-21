<?php
require_once("db/config.php");

$id = $_GET['id'];
$name = $_POST['name'];
$image = $_POST['catimage'];

$query = "UPDATE category SET name = '$name', image = '$image' WHERE id = $id ";

$sql = $conn->query($query);
if($sql==true){
    header("location: cat-all.php?msg=successfully upadeted");
}else{
    header("location: cat-all.php?msg=sorry not upadeted");
}


?>