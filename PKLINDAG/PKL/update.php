<?php
include 'koneksi.php';

$id = $_POST['id'];
$idpemda = $_POST['idpemda'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$tahun = $_POST['tahun'];

$query = "UPDATE databarang SET idpemda='$idpemda', nama_barang='$nama_barang', harga='$harga', tahun='$tahun' WHERE id=$id";

if (mysqli_query($koneksi, $query)) {
    header('Location: index.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
