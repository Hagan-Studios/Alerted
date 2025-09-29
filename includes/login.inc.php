<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        require_once 'dbh.inc.php';

        $stmt = $pdo->prepare("SELECT * FROM users WHERE name = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['pswd'])) {
            session_start();
            $_SESSION['username'] = $username;

            header("Location: ../dashboard.php");
            die();
            exit();
        } else {
            echo "<p style='font-family: monospace;'>Invalid username or password. Please try again.</p>";
            die();
            exit();
        }
    } catch (PDOException $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
        die();
        exit();
    }
}
else{
    header("Location: ../login.php");
    die();
    exit();
}