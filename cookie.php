<?php
//class 104
/*
 many kind of cookie
 1. name or variable
 2. value
 3. expire
 4. path
 5. domain
 6. http only

*/

// setcookie("name","mohammad shaifuddin");

// echo $_COOKIE['name'];
//time()
//setcookie("name","mohammad shaifuddin",time()+(1*30));

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}


?>