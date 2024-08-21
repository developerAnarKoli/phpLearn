<?php
//class 169

if(isset($_GET['id'])){
    $id = $_GET['id'];

    require_once("config.php");

    $query = "DELETE FROM user where id = $id";

    $sql = $conn->query($query);
    if($sql==true){
        header("location: showallUser.php?msg=deleted successfully");
    }else{
        header("location: showallUser.php?msg= sorry not deleted");
    }


}

?>