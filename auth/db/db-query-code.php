<?php

/*
//class 156
//those are localhost connection code.


$connection = new mysqli("localhost","root","");
if($connection==true){
    echo "data base is a connection";
}else{
    echo "database isn't connection";
}


$connection = mysqli_connect("localhost","root","");
if($connection){
    echo "database is connected";
}else{
    echo "database isn't connected";
}

*/



/*
//class157
//those are database connection code

$connection = new mysqli("localhost","root","","phplearn_ecom");
if($connection){
    echo "successful";
}else{
    echo "sorry";
}



$connection = mysqli_connect("localhost","root","","phplearn_ecom");
if($connection){
    echo "success";
}else{
    echo "sorry";
}
*/





/* 
class 158

//class 158
//those are database create and delete code


$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "phplearn_ecom";

//oop system 
$connection = new mysqli($hostname,$username,$password);

// $mysqli->query("DROP DATABASE phplearn_ecom");
// $mysqli->query("CREATE DATABASE phplearn_ecom");
$db_create = "CREATE DATABASE phplearn_ecom";
$db_delete = "DROP DATABASE phplearn_ecom";

$mysqli = $connection->query($db_create);

if($mysqli){
    echo "delete";
}else{
    echo "not create";
}




//other system

$hostname = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($hostname,$username,$password);

$db_create = "CREATE DATABASE phplearn_ecom";
$db_delete = "DROP DATABASE phplearn_ecom";

$mysqli = mysqli_query($connection,$db_create);

if($mysqli==true){
    echo "delete";
}else{
    echo "not deleted";
}

*/



/*
//class 159

require_once("config.php");

$create_table_query = "CREATE TABLE product(
    id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    price float
)";

$sql = $conn->query($create_table_query);
if($sql){
    echo "save again";
}else{
    echo "not save the data";
}
*/





/*
class 160 
require_once("db/config.php");

$query_data_insert = "INSERT INTO user(id, username,email,password,image) VALUES('1','Mohammad shaifuudin','shaifupolite@gmail.com', '11111', '')";

$sql = $conn->query($query_data_insert);
if($sql){
    echo "save info";
}else{
    echo "not save data";
}
*/ 

?>