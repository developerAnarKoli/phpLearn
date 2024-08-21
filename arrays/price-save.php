<?php
$title = $_POST['Title'];
echo $title ."</br>";
$price = $_POST['price'];
echo $price."</br>";
$plane = $_POST['plane'];
echo $plane."</br>";
$field_name = $_POST['field_name'];

$feature_count = count($field_name);

for($i = 0; $i<$feature_count; $i++){
    echo '<img src="pngtree-green-check-mark-png-image_8873320.png" width="15" height="15"/>'.$field_name[$i]. "<br>";
}
?>