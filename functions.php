<?php

function decide_action(){
    $input = readline("What will you do find or save your book?\n");
    $choice = 0;
    if($input == "save"){
        $choice = 1;
    }
    else if($input == "find"){
        $choice = 2;
    }
    return $choice;
}





?>