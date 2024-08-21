<?php
// 1. $GLOBALS;
// 2. $_POST;
// 3. $_GET;
// 4. $_FILES;
// 5. $_ENV;
// 6. $_COOKIE;
// 7. $_FILES;
// 8. $_REQUEST;
// 9. $_SERVER;

$name = "mohammad shaifuddin";

function getName(){
    // global $name;

    // echo $name;

    echo $GLOBALS['name'];

}

getName();
?>