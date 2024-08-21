<?php

$url = "https://www.you   tube.com/";

$url = filter_var($url, FILTER_SANITIZE_URL);


if(filter_var($url, FILTER_VALIDATE_URL)){
    echo "this is the perfect url";
}else{
    echo "this is not url";
}


?>