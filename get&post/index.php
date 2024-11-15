<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>
<body>

<form action="index.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password"><br>
    <button type="submit">Log In</button>
</form>

</body>
</html>

<?php

    echo $_POST["username"] . "<br>";
    echo $_POST["password"];

    /**
     * GET  
     *      better for search
     *      bookmarks the values
     *      appends the values into URL
     *      not secure
     * 
     * POST
     *      better for forms or sensitive info
     *      no data limit
     *      cannot bookmark
     *      better for submitting credentials
     *      
     * 
     */

?>

