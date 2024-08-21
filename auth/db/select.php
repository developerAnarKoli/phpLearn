<?php
//class 165

require_once("config.php");

$query = "SELECT * FROM user";

$sql = $conn->query($query);

if($sql->num_rows>0){
    // echo "we are get data";
    //var_dump($rows);
    while($rows = $sql->fetch_assoc()){
        echo $rows['id']." . ".$rows['username']. "<br>";
    }
}else{
    echo "we cann't get data";
}




?>