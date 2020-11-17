<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkringan Mas Dimas</title>
</head>

<body>
    <h1>Angkringan Mas Dimas</h1>
    <a href="login.php">Login</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Gambar</td>
            <td>Harga</td>
            <td>Stok</td>
        </tr>
        <?php
        include('./proses/config.php');

        $sql = "SELECT * FROM makanan";

        $query = mysqli_query($conn, $sql);

        $no = 1;

        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no; ?> </td>
                <td><?php echo $data["nama_makanan"]; ?> </td>
                <td><img src="./assets/img/<?php echo $data["gambar_makanan"]; ?>" alt="<?php echo $data["gambar_makanan"]; ?>" width="150px"></td>
                <td><?php echo $data["harga_makanan"]; ?> </td>
                <td><?php echo $data["stok_makanan"]; ?> </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
</body>

</html>