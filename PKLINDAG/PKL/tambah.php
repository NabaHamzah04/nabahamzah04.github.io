<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <a href="index.php">Kembali</a>
    <br><br>

    <form method="post" action="simpan.php">
        <label for="idpemda">ID Pemda:</label>
        <input type="text" name="idpemda" required>
        <br>
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="text" name="harga" required>
        <br>
        <label for="tahun">Tahun:</label>
        <input type="text" name="tahun" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
