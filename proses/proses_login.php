<?php 
session_start();
include("config.php");

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user";

    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($query);

    if($password === $data["password"]){
        $_SESSION['login'] = true;
        header("Location: ../admin/dashboard_admin.php");
        exit;
    } else {
        die("Wrong Password!");
    }
}

?>