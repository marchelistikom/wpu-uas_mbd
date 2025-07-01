<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbuas");

if (isset($_POST['submit_pendaftaran'])) {

    // Bagian Identitas Diri
    $nama_lengkap = $_POST['nama_lengkap'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $alamat_lengkap = $_POST['alamat_lengkap'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $email = $_POST['email'];

    // Bagian Data Keluarga
    $nama_ayah = $_POST['nama_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $jumlah_saudara = $_POST['jumlah_saudara'];
    $status_orang_tua = $_POST['status_orang_tua'];
    $alamat_orang_tua = $_POST['alamat_orang_tua'];

    // Bagian Pendidikan
    $jenjang_pendidikan = $_POST['jenjang_pendidikan'];
    $nama_sekolah = $_POST['nama_sekolah'];
    $jurusan_pendidikan = $_POST['jurusan_pendidikan'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $nilai_ipk = $_POST['nilai_ipk'];

    // Bagian Kesehatan
    $tinggi_badan = $_POST['tinggi_badan'];
    $berat_badan = $_POST['berat_badan'];
    $riwayat_kesehatan = $_POST['riwayat_kesehatan'];
    $kacamata = $_POST['kacamata'];

    // Bagian Dokumen Pendukung (File Upload)
    $pas_foto_name = $_FILES['pas_foto']['name'];
    $pas_foto_tmp = $_FILES['pas_foto']['tmp_name'];
    move_uploaded_file($pas_foto_tmp, 'img_pendaftaran_alu/' . $pas_foto_name);

    $skck_name = $_FILES['skck']['name'];
    $skck_tmp = $_FILES['skck']['tmp_name'];
    move_uploaded_file($skck_tmp, 'img_pendaftaran_alu/' . $skck_name);

    $sertifikat_name = ''; // Default kosong jika tidak ada sertifikat
    $sertifikat_tmp = '';
    if (isset($_FILES['sertifikat']) && $_FILES['sertifikat']['error'] == UPLOAD_ERR_OK) {
        $sertifikat_name = $_FILES['sertifikat']['name'];
        $sertifikat_tmp = $_FILES['sertifikat']['tmp_name'];
        move_uploaded_file($sertifikat_tmp, 'img_pendaftaran_alu/' . $sertifikat_name);
    }

    // --- SINTAKS INPUT KE DATABASE ---
    $query_input = "INSERT INTO pendaftaran_alu (
                        nama_lengkap, nik, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status_perkawinan, alamat_lengkap, nomor_telepon, email,
                        nama_ayah, pekerjaan_ayah, nama_ibu, pekerjaan_ibu, jumlah_saudara, status_orang_tua, alamat_orang_tua,
                        jenjang_pendidikan, nama_sekolah, jurusan_pendidikan, tahun_lulus, nilai_ipk,
                        tinggi_badan, berat_badan, riwayat_kesehatan, kacamata,
                        pas_foto, skck, sertifikat
                    ) VALUES (
                        '$nama_lengkap', '$nik', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$status_perkawinan', '$alamat_lengkap', '$nomor_telepon', '$email',
                        '$nama_ayah', '$pekerjaan_ayah', '$nama_ibu', '$pekerjaan_ibu', '$jumlah_saudara', '$status_orang_tua', '$alamat_orang_tua',
                        '$jenjang_pendidikan', '$nama_sekolah', '$jurusan_pendidikan', '$tahun_lulus', '$nilai_ipk',
                        '$tinggi_badan', '$berat_badan', '$riwayat_kesehatan', '$kacamata',
                        '$pas_foto_name', '$skck_name', '$sertifikat_name'
                    )";

    $input = mysqli_query($koneksi, $query_input);

    if ($input) {
        echo '<script language="Javascript">
                alert("Data pendaftaran berhasil tersimpan!");
                document.location = "lihat_pendaftar_alu.php";
              </script>';
    } else {
        echo '<script language="Javascript">
                alert("Gagal menyimpan data pendaftaran: ' . mysqli_error($koneksi) . '");
                document.location = "halamanUtama.php"; // Atau kembali ke halaman formulir jika gagal
              </script>';
    }
    // --- AKHIR SINTAKS INPUT KE DATABASE ---

} // Tutup blok if(isset($_POST['submit_pendaftaran']))
?>