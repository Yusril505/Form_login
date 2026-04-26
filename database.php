<?php
$hostname = "localhost";
$username = "root";
$password = "1";
$database_name = "login";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>