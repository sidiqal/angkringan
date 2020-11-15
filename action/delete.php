<?php 
include("../proses/config.php");

$id = $_GET["id"];

$sql = "DELETE FROM makanan WHERE id=$id";

$query = mysqli_query($conn, $sql);

if($query){
    header("Location: ../admin/dashboard_admin.php");
} else {
    die("Gagal Delete!");
}

?>