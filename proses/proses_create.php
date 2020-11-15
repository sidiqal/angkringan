<?php
include("config.php");
include("proses_upload_image.php");

if (isset($_POST["submit"])) {
    $nama_makanan = $_POST["nama_makanan"];
    $harga_makanan = $_POST["harga_makanan"];
    $stok_makanan = $_POST["stok_makanan"];
    $gambar_makanan = upload();

    $sql = "INSERT INTO makanan(nama_makanan, harga_makanan, stok_makanan, gambar_makanan) VALUES ('$nama_makanan', '$harga_makanan', '$stok_makanan', '$gambar_makanan')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: ../admin/dashboard_admin.php");
        exit;
    } else {
        die("Gagal menambahkan!");
    }
}
