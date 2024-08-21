<?php
function GetNumber(){
    static $number = 1;
    echo $number ."<br>";
    $number += 1;
}
GetNumber();
GetNumber();
GetNumber();

?>