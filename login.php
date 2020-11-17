<?php
session_start();
if ($_SESSION) {
    header("Location: ./admin/dashboard_admin.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page Angkringan Bang Dimas</title>
</head>

<body>
    <h1>Login Page Angkringan Bang Dimas</h1>
    <form action="./proses/proses_login.php" method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password"><br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>