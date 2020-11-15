<?php 
include("config.php");

if(isset($_POST["submit"])){
    $nama_makanan = $_POST["nama_makanan"];
    $harga_makanan = $_POST["harga_makanan"];
    $stok_makanan = $_POST["stok_makanan"];

    $sql = "INSERT INTO makanan(nama_makanan, harga_makanan, stok_makanan) VALUES ('$nama_makanan', '$harga_makanan', '$stok_makanan')";

    $query = mysqli_query($conn, $sql);

    if($query) {
        header("Location: ../admin/dashboard_admin.php");
        exit;
    } else {
        die("Gagal menambahkan!");
    }
}

?>