<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="text-align: center;">
        <h2>Welcome, <?= $_SESSION['username'] ?>!</h2>
        <p>Anda sedang berada di halaman dashboard.</p>
        <br>
        <a href="login.php" style="color: #ef4444; font-weight: bold;">Logout</a>
    </div>
</body>
</html>