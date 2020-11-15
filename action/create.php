<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Menu Angkringan Bang Dimas</title>
</head>

<body>
    <h1>Update Menu Angkringan Bang Dimas</h1>
    <a href="../admin/dashboard_admin.php">Back</a>
    <form action="../proses/proses_create.php" method="POST" enctype="multipart/form-data">
        <label for="nama_makanan">Nama Makanan :</label>
        <input type="text" name="nama_makanan" id="nama_makanan" required><br>
        <label for="harga_makanan">Harga Makanan :</label>
        <input type="text" name="harga_makanan" id="harga_makanan" required><br>
        <label for="stok_makanan">Stok Makanan :</label>
        <input type="text" name="stok_makanan" id="stok_makanan" required><br>
        <label for="gambar_makanan">Gambar Makanan :</label>
        <input type="file" name="gambar_makanan" id="gambar_makanan"><br>
        <button type="submit" name="submit">Add</button>
    </form>
</body>

</html>