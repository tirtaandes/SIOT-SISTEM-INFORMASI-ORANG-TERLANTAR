<!DOCTYPE html>
<html>
<head>
    <title>Tampilkan Semua Surat Keterangan</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Tampilkan Semua Surat Keterangan</h1>
    </header>

    <div class="container">
        <div class="content">
            <h2>Data Surat Keterangan</h2>
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

            // Query SQL untuk mengambil data SuratKeterangan
            $sql = "SELECT * FROM SuratKeterangan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nomor Surat</th><th>Tanggal Surat</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nomor_surat"] . "</td><td>" . $row["tanggal_surat"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "Tidak ada data Surat Keterangan.";
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
