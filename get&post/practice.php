<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice GET and POST</title>
</head>
<body>
    
    <form action="practice.php" method="GET">

        <label for="order">Order:</label><br>
        <input type="text" name="order"><br>
        <button type="submit">Order</button>

    </form>

</body>
</html>

<?php

    $order = "chicken";
    $price = 22;
    $amount = $_GET["order"];

    $price = $amount * $price;
    
    echo"You have ordered {$amount} pieces of {$order}s.<br>";
    echo"The total is ₱{$price}.";

?>