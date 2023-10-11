<?php
// Periksa apakah data dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir input
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $informasi_medis = $_POST["informasi_medis"];

    // Lakukan validasi data (bisa disesuaikan dengan kebutuhan)
    if (empty($nama) || empty($alamat)) {
        echo "Nama dan alamat harus diisi.";
    } else {
        // Koneksi ke basis data (gantilah sesuai dengan konfigurasi Anda)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "siot";

        // Buat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi ke basis data gagal: " . $conn->connect_error);
        }

        // Siapkan pernyataan SQL untuk menyisipkan data ke dalam tabel OrangTerlantar
        $sql = "INSERT INTO OrangTerlantar (Nama, Alamat, Tanggal_Lahir, Jenis_Kelamin, Informasi_Medis)
                VALUES ('$nama', '$alamat', '$tanggal_lahir', '$jenis_kelamin', '$informasi_medis')";

        // Eksekusi pernyataan SQL
        if ($conn->query($sql) === TRUE) {
            echo "Data orang terlantar berhasil disimpan.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tutup koneksi ke basis data
        $conn->close();
    }
} else {
    // Jika data tidak dikirimkan melalui POST, tampilkan pesan error
    echo "Permintaan tidak valid.";
}
?>
