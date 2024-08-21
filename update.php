<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
//    echo  $_GET['msg'];
if(isset($_GET['msg'])){
    echo " <h1> upadate page" . $_GET['msg'] . "</h1>";
}
    ?>
</body>
</html>