<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="update.php?msg=this is the message"> upadate</a>


    <?php

//     $string = "i am phpLearn";
//     $pattern = "/phpLearn/i";

//    echo preg_match($pattern,$string);

//    $string = "i am phpLearn. i am phpLearn. I am phpLearn";
//    $pattern = "/phpLearn/i";

//    echo preg_match_all($pattern,$string);

   $string = "i am phpLearn.";
   $pattern = "/phpLearn/i";


   echo preg_replace($pattern, "best javascript leaner", $string);


?>
</body>
</html>