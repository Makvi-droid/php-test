<?php

    $games = array("Sekiro: Shadows Die Twice" => "FROMSOFTWARE",
                    "Ghost of Tsushima" => "Sucker Punch",
                    "Hollow Knight" => "Team cherry",
                    "Batman: Arkham Knight" => "Rocksteady Studios");

    $games["Assassins Creed"] = "Ubisoft"; //adds a new associative array 
                   
    echo"Games:(prints associative array)<br>";
    foreach($games as $key => $values){
       
        echo"{$key} - developed by {$values}<br><br><br>";
    }

    echo"Games:(prints keys in associative array)<br>";
    $keys = array_keys($games);


    foreach($keys as $key){
        echo"{$key}<br><br>";
    }

    echo"Games:(prints values in associative array)<br>";
    $values = array_values($games);

    foreach($values as $value){
        echo"{$value}<br>";
    }

?>