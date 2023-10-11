<!DOCTYPE html>
<html>
<head>
    <title>Tampilkan Semua Surat Jalan</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Tampilkan Semua Surat Jalan</h1>
    </header>

    <div class="container">
        <div class="content">
            <h2>Data Surat Jalan</h2>
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

            // Query SQL untuk mengambil data SuratJalan
            $sql = "SELECT * FROM SuratJalan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nomor Surat Jalan</th><th>Tanggal Surat Jalan</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nomor_surat_jalan"] . "</td><td>" . $row["tanggal_surat_jalan"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Tidak ada data Surat Jalan.";
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
