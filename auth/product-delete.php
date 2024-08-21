<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once("db/config.php");

    $query = "DELETE FROM product WHERE id = $id";

    $sql = $conn->query($query);
    if($sql==true){
        header("location: product-all.php?msg=Product deleted successfully");

    }else{
        header("location: productu-all.php?msg= product isn't deleted");
    }
}



?>