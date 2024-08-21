<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

    <label for="username"> User name</label>
    <input type="text" name="username" id="">
    <button type="submit">Submit</button>

</form>

<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){

   $usernames = $_REQUEST['username'];

//    if(empty($usernames)){
//     echo "please fill up the field";
//    }else{
//     echo $usernames;
//    }
if(!empty($usernames)){
    echo $usernames;
}else{
    echo "please fill up th input filed";
}
}else{
    echo" first of all change your method key.thare are get. you have to need post";
}

?>
</body>
</html>