<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>
    <a href="index.php">Kembali</a>
    <br><br>

    <?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM databarang WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_array($result);
    ?>

    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="idpemda">ID Pemda:</label>
        <input type="text" name="idpemda" value="<?php echo $row['idpemda']; ?>" required>
        <br>
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="text" name="harga" value="<?php echo $row['harga']; ?>" required>
        <br>
        <label for="tahun">Tahun:</label>
        <input type="text" name="tahun" value="<?php echo $row['tahun']; ?>" required>
        <br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
