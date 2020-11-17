<?php
session_start();
include("config.php");

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username='$username'";

    $query = mysqli_query($conn, $sql);

    // Cek username
    if (mysqli_num_rows($query) === 1) {

        // Cek password
        $data = mysqli_fetch_array($query);
        // cek level
        if ($data['level'] == "admin" or $data['level'] == "pegawai") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $data['level'];

            header("Location: ../admin/dashboard_admin.php");
            exit;
        }
    }
}
