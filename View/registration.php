<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
    <h1>Registration Page</h1>
    <p>Please fill in the details below to register.</p>
    <form action="../Controller/regController.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br> <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br> <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br> <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>