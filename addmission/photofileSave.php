<?php
// // var_dump($_FILES['photo']);
// // echo "<br> <br>";
// //echo basename($_FILES['photo']['name']);
// $file_destination = "studentImage/".basename($_FILES['photo']['name']);
// $file_tmp_name = $_FILES['photo']['tmp_name'];
// move_uploaded_file($file_tmp_name,$file_destination);



// $getNumber = array(1,3,5,56,67,44,68);
// if(in_array(3,$getNumber)){
//     echo "we get it";
// }else{
//    echo "we can't get it";
// };
$file_extention = array("JPG","jpeg","png","PNG");
$file_name = basename($_FILES['photo']['name']);

$convet_to_array = explode(".",$file_name);// explode is the slicer 

$get_extention = $convet_to_array[1];

// print_r($convet_to_array);
// exit();

// $file_type = $_FILES['photo']['type'];
//echo $file_type;
if(in_array($get_extention,$file_extention)){
    echo "i get it";
}else{
    echo "i didn't get it";
}





// var_dump($_FILES['photo']);
// echo "<br> <br>";
// echo basename($_FILES['photo']['name']);
$file_destination = "studentImage/".basename($_FILES['photo']['name']);
$filte_tmp_name = $_FILES['photo']['tmp_name'];
///echo $filte_tmp_name;
move_uploaded_file($filte_tmp_name,$file_destination);


?>