<?php

require_once("db/config.php");
$code = $_POST['code'];

$query = "UPDATE user SET status = 'Approved' WHERE code= '$code' ";

$sql = $conn->query($query);

if($sql==true){
    header("location: Dashboard.php");
}else{
    header("location: sign-up.php?msg=please try again");
}




?>