<?php
//class 108
session_start();



session_unset();

$msg = "Log Out successfully ";
header("location: login.php?msg=$msg");



?>