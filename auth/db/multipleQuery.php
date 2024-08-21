<?php
//class 163

require_once("config.php");

$query = "insert into user(username,email,password) values('shaifu','shaifu@gmail.com','1111');";
$query .= "insert into user(username,email,password) values('politeshaifu','politeshaifu@gmail.com','2222');";
$query .= "insert into user(username,email,password) values('sagor','sagor@gmail.com','3333');";
$query .= "insert into product(name,price) values('php','8000');";
$query .= "insert into product(name,price) values('html and css', 6000);";
$query .= "insert into product(name,price) values('fullstake', 12000)";


$sql = $conn->multi_query($query);


if($sql){
    echo "save";
}else{
    echo "not save";
}
?>