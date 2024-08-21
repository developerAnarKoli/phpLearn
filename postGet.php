<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
        <label for="username"> User Name</label>
        <input type="text" name="username" id="">
        <label for="email"> User email</label>
        <input type="email" name="email" id="">
        <button type="submit">save</button>
    </form>

    <?php
    // if($_SERVER['REQUEST_METHOD']== "POST"){
    //    $usernmaes = $_POST['username'];
    //    $emails = $_POST['email'];

    //    if(!empty($usernmaes)){
    //     echo $usernmaes . $emails;
    //    }else{
    //     echo "please fill the filed";
    //    }
    // }

    if($_SERVER['REQUEST_METHOD']== 'GET'){
        // echo "this is click";

      $usernmaes = $_GET['username'];
      $emails =  $_GET['email'];
      if(!empty($usernmaes)){
        echo $usernmaes . $emails;
      }else{
        echo "please fill up the username";
      }
    }
    ?>
</body>
</html>