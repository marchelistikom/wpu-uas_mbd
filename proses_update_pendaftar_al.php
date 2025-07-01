<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "dbuas");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil data dari form POST
$nik_old = $_POST['nik_old']; // NIK lama untuk identifikasi record yang akan diupdate
$nama_lengkap = $_POST['nama_lengkap'];
$nik = $_POST['nik']; // NIK baru, jika ada perubahan
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$email = $_POST['email'];
$nomor_telepon = $_POST['nomor_telepon'];
$nama_sekolah = $_POST['nama_sekolah'];

// Inisialisasi variabel untuk nama file foto baru
$new_pas_foto_name = $_POST['old_pas_foto']; // Default: gunakan foto lama

// Tangani upload file baru jika ada
if (isset($_FILES['pas_foto']) && $_FILES['pas_foto']['error'] === UPLOAD_ERR_OK) {
    $file_tmp = $_FILES['pas_foto']['tmp_name'];
    $file_name = $_FILES['pas_foto']['name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Dapatkan ekstensi file

    // Buat nama unik untuk file baru untuk menghindari tumpang tindih
    $new_pas_foto_name = uniqid('foto_') . '.' . $file_ext;
    $upload_dir = 'img_pendaftaran_al/'; // Pastikan folder ini ada
    $upload_path = $upload_dir . $new_pas_foto_name;

    // Pindahkan file yang diupload ke direktori tujuan
    if (move_uploaded_file($file_tmp, $upload_path)) {
        // Jika ada foto lama dan berbeda dengan yang baru, hapus foto lama
        if (!empty($_POST['old_pas_foto']) && $_POST['old_pas_foto'] != $new_pas_foto_name) {
            $old_file_path = $upload_dir . $_POST['old_pas_foto'];
            if (file_exists($old_file_path)) {
                unlink($old_file_path); // Hapus file foto lama
            }
        }
    } else {
        // Jika gagal upload foto baru, tampilkan alert dan redirect
        echo '<script>
                alert("Gagal mengupload foto. Data lainnya mungkin diperbarui.");
                window.location.href = "lihat_pendaftar_al.php";
              </script>';
        // Tidak perlu exit() di sini karena script akan dilanjutkan untuk update data tanpa foto baru
        // dan kemudian di-redirect oleh kondisi if/else di bawah.
        // Jika ingin langsung berhenti di sini jika upload gagal, tambahkan exit();
        // Namun, jika gagal upload foto tetapi data lain harus tetap diupdate, jangan exit().
        $new_pas_foto_name = $_POST['old_pas_foto']; // Kembali ke foto lama jika upload gagal
    }
}

// Query untuk memperbarui data pendaftar
$query_update_data = "UPDATE pendaftaran_al SET 
                        nama_lengkap='$nama_lengkap', 
                        nik='$nik', 
                        agama='$agama', 
                        jenis_kelamin='$jenis_kelamin',
                        tanggal_lahir='$tanggal_lahir', 
                        tempat_lahir='$tempat_lahir', 
                        email='$email', 
                        nomor_telepon='$nomor_telepon', 
                        nama_sekolah='$nama_sekolah', 
                        pas_foto='$new_pas_foto_name' 
                      WHERE nik='$nik_old'"; // Update berdasarkan NIK lama

// Eksekusi query
if (mysqli_query($koneksi, $query_update_data)) {
    // Tampilkan alert sukses dan redirect menggunakan JavaScript
    echo '<script>
            alert("Data berhasil diperbarui!");
            window.location.href = "lihat_pendaftar_al.php";
          </script>';
    exit(); // Penting: hentikan eksekusi script setelah script JavaScript tercetak
} else {
    // Tampilkan alert error dan redirect menggunakan JavaScript
    echo '<script>
            alert("Error: ' . mysqli_error($koneksi) . '");
            window.location.href = "lihat_pendaftar_al.php"; // Atau bisa juga ke halaman error khusus
          </script>';
    exit();
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
