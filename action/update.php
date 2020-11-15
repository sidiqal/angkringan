<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location: ../login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Menu Angkringan Bang Dimas</title>
</head>
<body>
    <h1>Create Menu Angkringan Bang Dimas</h1>
    <a href="../admin/dashboard_admin.php">Back</a>
    <?php 
    include("../proses/config.php");

    $id = $_GET["id"];

    $sql = "SELECT * FROM makanan WHERE id=$id";

    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($query);

    ?>
    <form action="../proses/proses_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nama_makanan">Nama Makanan :</label>
        <input type="text" name="nama_makanan" id="nama_makanan" value="<?php echo $data["nama_makanan"] ?>"><br>
        <label for="harga_makanan">Harga Makanan :</label>
        <input type="text" name="harga_makanan" id="harga_makanan" value="<?php echo $data["harga_makanan"] ?>"><br>
        <label for="stok_makanan">Stok Makanan :</label>
        <input type="text" name="stok_makanan" id="stok_makanan" value="<?php echo $data["stok_makanan"] ?>"><br>
        <button type="submit" name="submit">Update</button>    
    </form>
</body>
</html>