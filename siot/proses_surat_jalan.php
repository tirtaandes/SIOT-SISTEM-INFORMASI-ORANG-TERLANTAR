<?php
// Periksa apakah data dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir input
    $nomor_surat = $_POST["nomor_surat"];
    $tujuan = $_POST["tujuan"];
    $tanggal_penerbitan = $_POST["tanggal_penerbitan"];
    $id_orang_terlantar = $_POST["id_orang_terlantar"];

    // Lakukan validasi data (bisa disesuaikan dengan kebutuhan)
    if (empty($nomor_surat) || empty($id_orang_terlantar)) {
        echo "Nomor surat dan ID orang terlantar harus diisi.";
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

        // Siapkan pernyataan SQL untuk menyisipkan data ke dalam tabel SuratJalan
        $sql = "INSERT INTO SuratJalan (Nomor_Surat, Tujuan, Tanggal_Penerbitan, ID_OrangTerlantar)
                VALUES ('$nomor_surat', '$tujuan', '$tanggal_penerbitan', '$id_orang_terlantar')";

        // Eksekusi pernyataan SQL
        if ($conn->query($sql) === TRUE) {
            echo "Data surat jalan berhasil disimpan.";
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
