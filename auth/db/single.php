<?php
//class 168

if(isset($_GET['id'])){
    $id = $_GET['id'];
    // echo $id;

    require_once('config.php');

    $query = "SELECT * FROM user where id=$id";

    $result = $conn->query($query);

    $rows = $result->fetch_assoc();
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $rows['username'] ?></h2>
    <h4><?php echo $rows['email'] ?> </h4>
</body>
</html>