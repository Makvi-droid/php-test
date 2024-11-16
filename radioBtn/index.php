<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio buttons</title>
</head>
<body>
    
    <form action="index.php" method="POST">

        <input type="radio" name="game" value="bloodborne" id="bloodborne">
        <label for="bloodborne">Bloodborne</label><br>
        <input type="radio" name="game" value="sekiro" id="sekiro">
        <label for="sekiro">Sekiro</label><br>
        <input type="radio" name="game" value="souls" id="souls">
        <label for="souls">Dark souls 3</label><br>
        <button type="submit" name="submit">Click</button>

    </form>

</body>
</html>

<?php

$game = $_POST["game"];

    if(isset($_POST["submit"])){
        
        switch($game){
            case "bloodborne":
                echo"You choose Bloodborne";
            break;
            case "sekiro":
                echo"You choose sekiro";
            break;
            case "souls":
                echo"You choose Dark souls 3";
            break;
            default: echo"Make a selection";
        }
        
    }

?>