<?php
 ///class 26
//  $age = 25;
//  if($age>=22){
//     echo "you can get marrige";
//  }else{
//     echo "you can't get marrige";
//  }
//class 25

// $current_day = date("D");
// echo $current_day ."<br>";
// if($current_day=="Fri"){
//     echo "you have get 5% discount";
// }elseif($current_day=="Sat"){
//     echo "you have get 10% discount";
// }elseif($current_day=="Sun"){
//     echo "you have get 15% discount";
// }elseif($current_day=="Mon"){
//     echo "you got 15%";
// } else{
//     echo "discount finished yesterday";
// }

// $current_day = date("D");
// echo $current_day;

// switch($current_day){
//     case $current_day=="Sat":
//         echo "you have got 10% discount";
//     break;
//     case $current_day =="Sun";
//         echo "you got 45%";
//     break;
//     case $current_day == "Mon";
//         echo "50% discount";
//     break;
//     default: 
//     echo "you don't have discount";
// }


$current_day = date("D");
echo $current_day;
switch($current_day){
    case $current_day === "Sat":
        echo "you go 45%0";
    break;
    default:
    echo "you hove no offer";
}
?>