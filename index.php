<?php
include "db.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Login successful!";
    } else {
        echo "Login failed.";
    }
}
?>

<h1>Login</h1>
<form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username"><br>
    <label for="password">Password:</label>
    <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
