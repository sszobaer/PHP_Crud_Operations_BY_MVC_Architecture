<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    Welcome to the Login Page!
    <p>This is a simple PHP page that demonstrates the use of PHP in HTML.</p>
    Let's Go to the <a href="../index.php">Home Page</a>
    <form action="../Controller/loginController.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br> <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br> <br>
        <input type="submit" value="Login">

</body>
</html>