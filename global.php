<?php

// cllass 9
    $cell = " 0166666666";

    function getCell(){
        global $cell;
        echo "my number: ".$cell;
    }
    getCell();

    function getCel(){
        
        echo "my number: ". $GLOBALS['cell'];
    }
    getCel();


?>