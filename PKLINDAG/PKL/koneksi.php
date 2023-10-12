<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'indag');

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
