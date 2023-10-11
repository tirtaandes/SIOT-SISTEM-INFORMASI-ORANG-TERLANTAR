<?php
// Periksa apakah data dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir input
    $jenis_bantuan = $_POST["jenis_bantuan"];
    $deskripsi_bantuan = $_POST["deskripsi_bantuan"];
    $jumlah_bantuan = $_POST["jumlah_bantuan"];
    $kriteria_kelayakan = $_POST["kriteria_kelayakan"];

    // Lakukan validasi data (bisa disesuaikan dengan kebutuhan)
    if (empty($jenis_bantuan) || empty($jumlah_bantuan)) {
        echo "Jenis bantuan dan jumlah bantuan harus diisi.";
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

        // Siapkan pernyataan SQL untuk menyisipkan data ke dalam tabel Bantuan
        $sql = "INSERT INTO Bantuan (Jenis_Bantuan, Deskripsi_Bantuan, Jumlah_Bantuan, Kriteria_Kelayakan)
                VALUES ('$jenis_bantuan', '$deskripsi_bantuan', '$jumlah_bantuan', '$kriteria_kelayakan')";

        // Eksekusi pernyataan SQL
        if ($conn->query($sql) === TRUE) {
            echo "Data jenis bantuan berhasil disimpan.";
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
