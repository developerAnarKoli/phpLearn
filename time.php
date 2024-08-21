<?php
//H used for 24hours
// h used for 12hours
// i used for minute
// s used for second
// a used for atmosphare

date_default_timezone_set("Asia/Dhaka");
// echo date("h: i: s a");

$setTime = mktime(22, 30, 45, 1, 10, 2023);

echo date("h: i: s: A d-M-Y",$setTime);


?>