<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form action="processLogin.php" method="POST">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
        <br><br>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>