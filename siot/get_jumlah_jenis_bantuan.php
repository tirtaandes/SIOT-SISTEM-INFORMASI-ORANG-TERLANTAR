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

// Query SQL untuk mengambil jumlah data dari tabel JenisBantuan
$sql = "SELECT COUNT(*) AS total FROM JenisBantuan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $jumlahJenisBantuan = $row["total"];
    echo $jumlahJenisBantuan;
} else {
    echo "0";
}

$conn->close();
?>
