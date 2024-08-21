<?php
//class 162

require_once ("config.php");

$query = "INSERT INTO user(username,email,password) VALUES('Test','test@gmail.com','00000')";

$sql = $conn->query($query);

if($sql==true){
    echo $conn->insert_id;
}else{
    echo "data not save";
}

?>