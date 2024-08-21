<?php

// $birthDate = new DateTime("05/01/1997");

// $toDate = new DateTime();

// echo $toDate->format("d/m/Y") ."<br>";

// $age = $toDate->diff($birthDate);

// echo $age->format("%d/%m/%Y");


// $birthdate = new Datetime("05/02/1997");
// $pasentDate = new Datetime();

// echo $pasentDate->format("d/m/Y   ===>");

// $age = $pasentDate->diff($birthdate);
// echo $age->format("%d- %m- %y");


$birth = new Datetime("05/02/1997");

$realTime = new Datetime();
echo $realTime->format("d/m/Y  =====>");

$myRealYear = $realTime->diff($birth);
echo $myRealYear->format("%d/%m/%y");

?>