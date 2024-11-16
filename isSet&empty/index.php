<?php

 
    //isset() checks if your variable is empty or not
    echo"isset():<br>";
    if(isset($game)){
        echo"You have a game called {$game}";
    }
    else{
        echo"Your game is empty";
    }

    echo"<br><br>";
    echo"empty():<br>";
    $game2 = "null";
    //
    if(empty($game2)){
        echo"You dont have a game";
    }
    else{
        echo"You have a game";
    }

?>