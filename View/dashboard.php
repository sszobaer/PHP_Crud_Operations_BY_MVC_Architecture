 <?php
    session_start();
    if(isset($_SESSION['username'])){
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dahboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome to the user dashboard!</p>
    <a href="../Controller/logoutController.php">Log Out</a>
</body>
</html>
<?php
    } else{
        header('location:../view/login.php');
        exit();
    }
?>