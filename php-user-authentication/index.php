<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            color: #343a40;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #E9A8F2;
            text-align: center;
        }

        h1 {
            color: #F7418F;
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn-warning {
            background-color: #FF6AC2;
            border-color: #E178C5;
            color: #343a40;
            transition: background-color 0.3s ease;
        }

        .btn-warning:hover {
            background-color: lightpink;
            border-color: #ffca28;
            color: #343a40;
        }
    </style>
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome aboard!</h1>
        <p>You have successfully signed in. <br>Explore my platform to discover amazing features!</p>

        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>
