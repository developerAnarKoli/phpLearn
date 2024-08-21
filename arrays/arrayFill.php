<?php
//class 16 of array playlist

/*
1. array_fill(how is starting number, how many number will be continue);
2. array_fill_keys( the indexing number is seclected by ownself)

*/ 
// $infos = array_fill(10,3,"mohammad shaifuddin");

// var_dump($infos);

$myOwn = array(37, 4,7, 39);

$myownNumberset = array_fill_keys($myOwn, "mohmamad");

var_dump($myownNumberset);


?>