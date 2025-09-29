<?php

session_start();
if (isset($_SESSION['username'])) {
    header("Location: ../dashboard.php");
    die();
    exit();
}
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/login.css">
        <title>Login</title>
        <link rel="icon" href="img/icon.jpg" type="image/x-icon">
        <style>
                body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .login-container {
                background-color: #fff;
                padding: 5vw;
                border-radius: 1vw;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 300px;
                text-align: center;
            }
            .login-container h2 {
                margin-bottom: 2vw;
            }
            .login-container input {
                width: 100%;
                height: 3vw;
                font-size: 1vw;
                margin: 1vw 0;
                border: 1px solid #ccc;
                border-radius: 1vw;
            }
            .login-container button {
                width: 100%;
                padding: 1vw;
                background-color: #28a745;
                color: white;
                border: none;
                border-radius: 1vw;
                cursor: pointer;
            }
            .login-container button:hover {
                background-color: #218838;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h2>Login</h2>
            <form action="includes/login.inc.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div> 
    </body>
</html>