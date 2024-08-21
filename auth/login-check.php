<?php
//class 107
require_once("db/config.php");
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";

$sql = $conn->query($query);

// var_dump($sql);
// exit();

if($sql->num_rows>0){
    $rows = $sql->fetch_assoc();
    $_SESSION['username']=$username;
    $_SESSION['image']= $rows['image'];
    header("location: Dashboard.php");
}else{
    $msg = "there are something missing";
    header("location: login.php?msg=$msg");
}

///user name = "admin" and password = "123456"

//class 107
// if($username == "admin" && $password == "123456"){
//     echo "login successfully";
//     $_SESSION['username'] = $username;
//     $_SESSION['password'] = $password;
//     header("location: Dashboard.php");
// }else{
//     $msg = "there are someting missing";
//     header("location: login.php?msg=$msg");
    
// }

?>