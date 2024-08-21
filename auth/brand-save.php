<?php
require_once("db/config.php");

function fileUpload($type = array("png","PNG","JPEG","jpeg","jpg","JPG"),$filename){
    $file_extention = $type;
    $filebase_name = basename($filename['name']);
    $file_array_name = explode(".",$filebase_name);

    $file_size = $filename['size'];

    if(in_array($file_array_name[1],$file_extention)){
        $file_destination = "studentimage/".time().basename($filename['name']);
        $file_tmp_name = $filename['tmp_name'];
        move_uploaded_file($file_tmp_name,$file_destination);
        return $file_destination;
    }else{
        echo "not supported";
    }



}

$exten = array("png","PNG","JPEG","jpeg","jpg","JPG");


$filename = $_FILES['brand_image'];

$filedir = "image";

$url = fileUpload($exten,$filename);
$name = $_POST['name'];

$query ="INSERT INTO brand(name,image) VALUES('$name','$url')";

$sql = $conn->query($query);

if($sql){
    header("location: brand-all.php?msg=Brand data saved successfully");
}else{
    header("location: brand-all.php?msg= Brand data isn't saved");
}
?>