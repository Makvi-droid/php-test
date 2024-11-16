<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Buttons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
  </head>

</head>
<body>
    
<form action="index.php" method="post">

        <input type="checkbox" name="pizza" value="Pizza">

        Pizza<br>

        <input type="checkbox" name="hamburger" value="Hamburger">

        Hamburger<br>

        <input type="checkbox" name="hotdog" value="Hotdog">

        Hotdog<br>

        <input type="checkbox" name="taco" value="Taco">

        Taco<br>

        <button type="submit" name="submit" class="btn btn-warning">Submit</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

</body>
</html>

<?php
echo"<br>";

if(isset($_POST["submit"])){

    if(isset($_POST["pizza"])){
        echo"You like pizzas";
    }
    elseif(isset($_POST["hamburger"])){
        echo"You like hamburgers";
    }
    elseif(isset($_POST["hotdog"])){
        echo"You like hotdogs";
    }
    elseif(isset($_POST["taco"])){
        echo"You like tacos";
    }
    else{
        echo"Select a food";
    }

 }

?>