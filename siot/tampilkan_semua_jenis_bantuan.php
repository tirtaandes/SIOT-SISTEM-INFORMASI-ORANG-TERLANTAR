<!DOCTYPE html>
<html>
<head>
    <title>Tampilkan Semua Jenis Bantuan</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Tampilkan Semua Jenis Bantuan</h1>
    </header>

    <div class="container">
        <div class="content">
            <h2>Data Jenis Bantuan</h2>
            <?php
            // Koneksi ke database (gantilah sesuai dengan konfigurasi Anda)
            $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "siot";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Koneksi ke basis data gagal: " . $conn->connect_error);
            }

            // Query SQL untuk mengambil data JenisBantuan
            $sql = "SELECT * FROM Bantuan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nama Jenis Bantuan</th><th>Deskripsi Bantuan</th><th>Jumlah Bantuan</th><th>Kriteria Kelayakan</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["ID_Bantuan"] . "</td><td>" . $row["Jenis_Bantuan"] . "</td><td>" . $row["Deskripsi_Bantuan"] . "</td><td>" . $row["Jumlah_Bantuan"] . "</td><td>" . $row["Kriteria_Kelayakan"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Tidak ada data Jenis Bantuan.";
            }

            $conn->close();
            ?>
        </div>
    </div>

    <footer>
        &copy; 2023 Sistem Pendataan Orang Terlantar
    </footer>
</body>
</html>
