<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

</head>

<body>

<form action="form.php" method="post">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h3 class="text-center mb-4">Login</h3>
                            
                                <!-- Username Field -->
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
                                </div>

                                <!-- Password Field -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                                </div>

                                <!-- Login Button -->
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
                                </div>
                           

                            <!-- Forgot Password Link -->
                            <div class="mt-3 text-center">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
</body>

</html>

<?php

    
/*
    foreach($_POST as $key => $value){
        echo"{$key} = {$value}<br>";
    }

*/

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username) && empty($password)){
            echo"Username and password is empty";
        
        }
        elseif(empty($username)){
            echo"Username is empty";
        }
        elseif(empty($password)){
            echo"Password is empty";
        }
        
        else{
            echo"Hello {$username}<br>";
            echo"Your password is {$password}<br>";
        }
    }

?>