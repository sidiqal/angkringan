<?php
include("config.php");
require("proses_upload_image.php");

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama_makanan = $_POST["nama_makanan"];
    $harga_makanan = $_POST["harga_makanan"];
    $stok_makanan = $_POST["stok_makanan"];
    $gambar_lama = $_POST["gambar_lama"];

    if ($_FILES["gambar_makanan"]["error"] === 4) {
        $gambar_makanan = $gambar_lama;
    } else {
        $gambar_makanan = upload();
    }

    $sql = "UPDATE makanan SET nama_makanan='$nama_makanan',harga_makanan='$harga_makanan',stok_makanan='$stok_makanan',gambar_makanan='$gambar_makanan' WHERE id=$id";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: ../admin/dashboard_admin.php");
        exit;
    } else {
        die("Gagal Update!");
    }
}
