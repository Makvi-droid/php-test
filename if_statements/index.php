<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF-ELSE</title>
</head>
<body>
    
    <form action="index.php" method="POST">
        <label for="age">Enter Age:</label>
        <input type="text" name="age" id="age"><br>
        <button type="submit">Submit</button><br>
    </form>

</body>
</html>

<?php

    $age = $_POST["age"];

    if($age >= 18){
        echo"You are {$age} years old<br>";
        
        echo"You are allowed to enter!!";
    }
    else{
        echo"You are {$age} years old<br>";
        echo"You are too young to enter";
    }


?>