<?php
require_once("db/config.php");


function fileUpload($type=array("png","PNG","JPG","jpg","jpeg","JPEG"),$filename){

    $file_extension = $type;
    $filebase_name = basename($filename['name']);
    $file_array_name = explode(".",$filebase_name);
    $file_size = $filename['size'];

    if(in_array($file_array_name[1],$file_extension)){
        $file_destination = "studentimage/".time().basename($filename['name']);
        $file_tmp_name = $filename['tmp_name'];
        move_uploaded_file($file_tmp_name,$file_destination);
        return $file_destination;
    }else{
        return "not supported";
    }

}
$exten = array("png","PNG","JPG","jpg","jpeg","JPEG");


$filename = $_FILES['feature_image'];

$filedir = "image";
$url = fileUpload($exten,$filename);

$product_name = $_POST['name'];
$regular_price = $_POST['regular_price'];
$sale_price = $_POST['sale_price'];
$cat_id = $_POST['cat_id'];
$brand_id = $_POST['brand_id'];


$query = "INSERT INTO product(name,sale_price,regular_price,cat_id,brand_id,feature_image) VALUES('$product_name',$regular_price,$sale_price,$cat_id,$brand_id,'$url')";

$sql = $conn->query($query);

if($sql){
    header("location: product-all.php?msg=product added successfully");
}else{
    header("location: product-all.php?msg=product don't added successfully");
}



?>