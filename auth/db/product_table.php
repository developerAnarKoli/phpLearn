<?php
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
?>