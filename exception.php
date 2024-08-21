<?php
//class 122

// function ageCalculate($age){
//     if($age<=18){
//         throw new exception("you are not a voter");
//     }
//     return true;
// }
// try{
//     ageCalculate(23);
//     echo "you are voter";

// }
// catch(exception $exp){
//     echo $exp->getMessage();
// }
// finally{
//   echo "you can go ahead";
// }




function ageCalculate($age){
    if($age<=18){
        throw new exception("you are not voter for the election");
    }
    return true;
}

try{
    ageCalculate(35);
    echo "you are a voter";

}
catch(Exception $exp){

    echo $exp->getMessage();

}
finally{
echo "you can go ahead";
}

?>