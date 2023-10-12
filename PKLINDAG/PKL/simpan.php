<?php
include 'koneksi.php';

$idpemda = $_POST['idpemda'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$tahun = $_POST['tahun'];

$query = "INSERT INTO databarang (idpemda, nama_barang, harga, tahun) VALUES ('$idpemda', '$nama_barang', '$harga', '$tahun')";

if (mysqli_query($koneksi, $query)) {
    header('Location: index.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
