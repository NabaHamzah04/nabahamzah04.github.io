<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Data Barang</title>
</head>
<body>
    <h1>Pencarian Data Barang</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="keyword">Kata Kunci:</label>
        <input type="text" name="keyword" id="keyword" required>
        <input type="submit" value="Cari">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Konfigurasi koneksi ke database
        $host = "localhost";
        $username = "username_db";
        $password = "password_db";
        $database = "nama_database";

        $koneksi = mysqli_connect($host, $username, $password, $database);

        if (!$koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        // Menerima kata kunci dari form
        $keyword = $_POST['keyword'];

        // Mengeksekusi query pencarian
        $query = "SELECT * FROM barang WHERE idpemda LIKE '%$keyword%' OR nama_barang LIKE '%$keyword%' OR harga LIKE '%$keyword%' OR tahun LIKE '%$keyword'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Error dalam eksekusi query: " . mysqli_error($koneksi));
        }

        // Menampilkan hasil pencarian
        echo "<h2>Hasil Pencarian:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID Pemda</th><th>Nama Barang</th><th>Harga</th><th>Tahun</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['idpemda'] . "</td>";
            echo "<td>" . $row['nama_barang'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            echo "<td>" . $row['tahun'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        // Menutup koneksi database
        mysqli_close($koneksi);
    }
    ?>
</body>
</html>
