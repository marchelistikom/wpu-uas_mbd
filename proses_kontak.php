<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbuas");

// Cek koneksi
if (!$conn) {
    // Redirect ke kontak.php dengan status gagal
    header("Location: kontak.php?status=gagal");
    exit;
}

// Ambil data dari form
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$pesan = $_POST['pesan'] ?? '';

// Query insert data ke tabel kontak
$sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

// Cek apakah berhasil atau tidak
if (mysqli_query($conn, $sql)) {
    header("Location: kontak.php?status=sukses");
} else {
    header("Location: kontak.php?status=gagal");
}

mysqli_close($conn);
exit;
?>
