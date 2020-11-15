<?php 
function upload()
{
    global $conn;

    $namaFile = $_FILES['gambar_makanan']['name'];
    $ukuranFile = $_FILES['gambar_makanan']['size'];
    $errorFile = $_FILES['gambar_makanan']['error'];
    $tmpFile = $_FILES['gambar_makanan']['tmp_name'];

    $namaGambarValid = ['jpg', 'png', 'jpeg'];
    $namaGambar = explode('.', $namaFile);
    $namaGambar = strtolower(end($namaGambar));
    if (!in_array($namaGambar, $namaGambarValid)) {
        echo "Bukan gambar!";
    }

    $namaAcak = uniqid();
    $namaAcak .= '.';
    $namaAcak .= $namaGambar;

    move_uploaded_file($tmpFile, '../assets/img/' . $namaAcak);

    return $namaAcak;
}
