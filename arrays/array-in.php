<?php

//class 18 and 19 array playlist
$userimage = $_FILES['userimage'];

$userImageName = $userimage['name'];
$userImage_array = explode('.',$userImageName);

// print_r($userImage_array);
// exit();
$getimage =$userImage_array[1];
$format = array("png","PNG", "JPG", "jpg");


if(in_array($getimage, $format)){
    echo "this is match";
}else{
    echo "this is not match";
}


?>