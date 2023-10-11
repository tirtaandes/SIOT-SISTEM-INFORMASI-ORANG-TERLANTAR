<!DOCTYPE html>
<html>
<head>
    <title>Proses Surat Keterangan</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Proses Surat Keterangan</h1>
    </header>

    <div class="container">
        <div class="content">
            <?php
            // Ambil data dari formulir input
            $namaPenerima = $_POST["nama_penerima"];
            $alamatPenerima = $_POST["alamat_penerima"];
            $keperluan = $_POST["keperluan"];

            // Proses untuk menghasilkan Surat Keterangan
            $tanggalSurat = date("Y-m-d");
            $nomorSurat = "SK/" . date("Y") . "/" . uniqid();

            // Tandatangan Kepala Dinas Sosial
            $namaKepalaDinas = "Nama Kepala Dinas Sosial"; // Gantilah dengan nama sebenarnya
            $jabatanKepalaDinas = "Kepala Dinas Sosial"; // Gantilah dengan jabatan sebenarnya

            // Tampilkan Surat Keterangan yang telah dibuat
            echo "<h2>Surat Keterangan</h2>";
            echo "<p>Nomor Surat: $nomorSurat</p>";
            echo "<p>Tanggal Surat: $tanggalSurat</p>";
            echo "<p>Kepada Yth.,</p>";
            echo "<p>$namaPenerima</p>";
            echo "<p>Alamat: $alamatPenerima</p>";
            echo "<p>Dengan Hormat,</p>";
            echo "<p>Dengan surat ini, kami memberikan keterangan bahwa:</p>";
            echo "<p>Yang bersangkutan:</p>";
            echo "<p>Nama: $namaPenerima</p>";
            echo "<p>Alamat: $alamatPenerima</p>";
            echo "<p>Keperluan: $keperluan</p>";
            echo "<p>Demikian surat keterangan ini kami buat untuk dapat dipergunakan sebagaimana mestinya.</p>";
            echo "<br>";
            echo "<p>Tertanda,</p>";
            echo "<p>$namaKepalaDinas</p>";
            echo "<p>$jabatanKepalaDinas</p>";

            // Simpan Surat Keterangan ke database jika diperlukan
            // ...

            ?>
        </div>
    </div>

    <footer>
        &copy; 2023 Sistem Pendataan Orang Terlantar
    </footer>
</body>
</html>
