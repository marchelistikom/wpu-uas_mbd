<?php
// Cek apakah parameter 'nik' dikirim melalui URL
if (isset($_GET['nik'])) {
    // Ambil nilai NIK dari parameter URL
    $nik = $_GET['nik'];

    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "dbuas");

    // Periksa koneksi
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Query untuk menghapus data dari tabel pendaftar_ad
    $query_hapus = "DELETE FROM pendaftaran_ac WHERE nik = '$nik'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query_hapus)) {
        // Redirect kembali ke halaman lihat_pendaftar_ad.php dengan notifikasi sukses
        header("Location: lihat_pendaftar_ac.php?status=success_delete");
        exit;
    } else {
        // Redirect dengan notifikasi error dan pesan
        $error_message = urlencode("Gagal menghapus data: " . mysqli_error($koneksi));
        header("Location: lihat_pendaftar_ac.php?status=error&message=$error_message");
        exit;
    }

    // Tutup koneksi
    mysqli_close($koneksi);
} else {
    // Jika NIK tidak dikirim, redirect dengan pesan error
    header("Location: lihat_pendaftar_ac.php?status=error&message=Parameter NIK tidak ditemukan");
    exit;
}
?>
