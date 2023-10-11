document.addEventListener("DOMContentLoaded", function () {
    // Simpan elemen-elemen dengan ID yang sesuai dalam variabel
    var jumlahOrangTerlantarElement = document.getElementById("jumlah-orang-terlantar");
    var jumlahJenisBantuanElement = document.getElementById("jumlah-jenis-bantuan");
    var jumlahSuratKeteranganElement = document.getElementById("jumlah-surat-keterangan");
    var jumlahSuratJalanElement = document.getElementById("jumlah-surat-jalan");

    // Fungsi untuk mengambil jumlah data dari tabel OrangTerlantar
    function updateJumlahOrangTerlantar() {
        // Buat permintaan AJAX untuk mengambil jumlah data OrangTerlantar dari server PHP
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Respons dari server berisi jumlah data OrangTerlantar
                var jumlahOrangTerlantar = parseInt(xhr.responseText);
                jumlahOrangTerlantarElement.textContent = jumlahOrangTerlantar;
            }
        };
        xhr.open("GET", "get_jumlah_orang_terlantar.php", true);
        xhr.send();
    }

    // Panggil fungsi updateJumlahOrangTerlantar saat halaman dimuat
    updateJumlahOrangTerlantar();

    // Fungsi untuk mengambil jumlah data dari tabel JenisBantuan
    function updateJumlahJenisBantuan() {
        // Buat permintaan AJAX untuk mengambil jumlah data JenisBantuan dari server PHP
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Respons dari server berisi jumlah data JenisBantuan
                var jumlahJenisBantuan = parseInt(xhr.responseText);
                jumlahJenisBantuanElement.textContent = jumlahJenisBantuan;
            }
        };
        xhr.open("GET", "get_jumlah_jenis_bantuan.php", true);
        xhr.send();
    }

    // Panggil fungsi updateJumlahJenisBantuan saat halaman dimuat
    updateJumlahJenisBantuan();

    // Fungsi untuk mengambil jumlah data dari tabel SuratKeterangan
    function updateJumlahSuratKeterangan() {
        // Buat permintaan AJAX untuk mengambil jumlah data SuratKeterangan dari server PHP
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Respons dari server berisi jumlah data SuratKeterangan
                var jumlahSuratKeterangan = parseInt(xhr.responseText);
                jumlahSuratKeteranganElement.textContent = jumlahSuratKeterangan;
            }
        };
        xhr.open("GET", "get_jumlah_surat_keterangan.php", true);
        xhr.send();
    }

    // Panggil fungsi updateJumlahSuratKeterangan saat halaman dimuat
    updateJumlahSuratKeterangan();

    // Fungsi untuk mengambil jumlah data dari tabel SuratJalan
    function updateJumlahSuratJalan() {
        // Buat permintaan AJAX untuk mengambil jumlah data SuratJalan dari server PHP
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Respons dari server berisi jumlah data SuratJalan
                var jumlahSuratJalan = parseInt(xhr.responseText);
                jumlahSuratJalanElement.textContent = jumlahSuratJalan;
            }
        };
        xhr.open("GET", "get_jumlah_surat_jalan.php", true);
        xhr.send();
    }

    // Panggil fungsi updateJumlahSuratJalan saat halaman dimuat
    updateJumlahSuratJalan();

});
