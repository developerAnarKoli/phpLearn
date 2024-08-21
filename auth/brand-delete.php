<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once("db/config.php");
    $query = "DELETE FROM brand WHERE id = $id";
    $sql = $conn->query($query);
    if($sql==true){
        header("location: brand-all.php?msg=Deleted brand successfully");
    }else{
        header("location: brand-all.php?msg=Brand didn't delete");
    }
}else{
    header("location: brand-all.php?msg= we can't get id");
}


?>