<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Data Barang</title>
</head>
<body>
    <h1>Rancang BAngun Aplikasi Berbasi WEB di Dinas Koperasi perindustrian dan Perdagangan</h1>
    <a href="tambah.php">Tambah Barang</a>
    <br><br>

    <form method="post" action="index.php">
        <input type="text" name="keyword" placeholder="Cari Barang">
        <input type="submit" value="Cari">
    </form>

    <table border="1">
        <tr>
            <th>ID Pemda</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>

        <?php
        include 'koneksi.php';

        $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
        $query = "SELECT * FROM databarang WHERE nama_barang LIKE '%$keyword%'";
        $result = mysqli_query($koneksi, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['idpemda'] . "</td>";
            echo "<td>" . $row['nama_barang'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            echo "<td>" . $row['tahun'] . "</td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus.php?id=" . $row['id'] . "'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
