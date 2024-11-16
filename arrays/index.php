<?php

    $games = array("bloodborne", "sekiro", "dark souls 3", "demon souls", "elden ring");
    $animes = array("bleach", "kimi no na wa", "dr stone", "dandadan", "HOTD");

    $games[4] = "ashes of ariandel" . "<br>";

    echo $games[0] . "<br>";
    echo $games[1] . "<br>";
    echo $games[2] . "<br>";
    echo $games[3] . "<br>";
    echo $games[4] . "<br><br>";

    array_push($animes, "black clover"); //adds an element to an array

    $games[1] = "scholar of the 1st sin" . "<br>";  //changes the element in that index

    foreach($games as $game){       //foreach displays all elements in an array
        echo $game . "<br><br>";
    }

    foreach($animes as $anime){
        echo $anime . "<br>";
    }

?>