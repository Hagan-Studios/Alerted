<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="img/icon.jpg" type="image/x-icon">
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .admin-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        input {
            
            font-size: 16px;
            margin: 10px 0;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <h1>Admin Panel</h1>
        <form action="includes/admin.inc.php" method="POST">
            <label for="map">Map: </label>
            <input type="file" name="map" id="map" accept="image/*" required>
            <br>
            <br>
            <label for="legend">Legend: </label>
            <input type="file" name="legend" id="legend" accept="image/*" required>
            <br>
            <br>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>