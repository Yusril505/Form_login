<?php
include "database.php";
$register_message = "";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";
        if ($db->query($sql)) {
            $register_message = "Daftar berhasil, silakan login.";
        }
    // Ubah ini di bagian catch:
} catch (mysqli_sql_exception $e) {
    // Ini akan memuntahkan error asli dari database:
    $register_message = "Error Detail: " . $e->getMessage(); 
}
}

include "login_reigster.html"; 


?>
