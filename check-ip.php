<?php

//echo $_SERVER['REMOTE_ADDR'];

$my_ip_address = "127.0.0.1";

if(filter_var($my_ip_address, FILTER_VALIDATE_IP)){
    echo "successfully get it";
}else{
    echo "the ip address doesn't match ";
}

?>