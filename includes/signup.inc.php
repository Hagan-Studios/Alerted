<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        require_once 'dbh.inc.php';

        $stmt = $pdo->prepare("SELECT * FROM users WHERE name = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo "<p style='font-family: monospace;'>Username already taken. Please choose another one.</p>";
            die();
            exit();
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (name, pswd) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
        session_start();
        $_SESSION['username'] = $username;
        
        header("Location: ../dashboard.php");
        die();
        exit();
    } catch (PDOException $e) {
        echo "<p style='font-family: monospace;'>Error: " . $e->getMessage() . "</p>";
        die();
        exit();
    }
}
else{
    header("Location: ../signup.php");
    die();
    exit();
}