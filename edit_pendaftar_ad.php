<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_edit_pendaftar_ad.css">
    <!-- Font Awesome untuk ikon (Pensil dan Tong Sampah) jika diperlukan di masa depan -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Edit Pendaftar AD</title>
</head>
<body>
    <?php include 'navbar.php'?>

    <main class="main-content">
        <div class="header-content-wrapper">
            <!-- Logo TNI AD -->
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Insignia_of_the_Indonesian_Army.svg/330px-Insignia_of_the_Indonesian_Army.svg.png" alt="Logo TNI AD" class="logo-form">
            <h1 class="section-title-form">FORMULIR EDIT DATA PENDAFTAR TNI AD</h1>
        </div>

        <div class="form-container">
            <?php
                // Koneksi ke database
                $koneksi = mysqli_connect("localhost", "root", "", "dbuas"); 

                // Mendapatkan NIK dari URL
                $nik = $_GET['nik']; 

                // Query untuk mengambil data pendaftar tertentu berdasarkan NIK
                $query_ambil_data_pendaftar_tertentu = "SELECT * FROM pendaftaran_ad WHERE nik='$nik'";
                $eksekusi_query_ambil_data_pendaftar_tertentu = mysqli_query($koneksi,$query_ambil_data_pendaftar_tertentu);
                
                // Perulangan untuk menampilkan data dalam form
                while ($data = mysqli_fetch_array($eksekusi_query_ambil_data_pendaftar_tertentu)){
            ?>
            <form action="proses_update_pendaftar_ad.php" method="post" enctype="multipart/form-data" class="edit-form">
                <!-- NIK (dijadikan hidden input agar tetap bisa dikirim ke prosesUpdate.php) -->
                <input type="hidden" name="nik_old" value="<?= $data['nik'] ?>"> 

                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" name="nik" value="<?= $data['nik'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" id="agama" name="agama" value="<?= $data['agama'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" <?= ($data['jenis_kelamin'] == "Laki-laki") ? "selected" : ""; ?>>Laki-laki</option>
                        <option value="Perempuan" <?= ($data['jenis_kelamin'] == "Perempuan") ? "selected" : ""; ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $data['tanggal_lahir'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?= $data['email'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" value="<?= $data['nomor_telepon'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text" id="nama_sekolah" name="nama_sekolah" value="<?= $data['nama_sekolah'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="pas_foto">Pas Foto (3x4)</label>
                    <?php if (!empty($data['pas_foto'])): ?>
                        <p>Foto saat ini:</p>
                        <img src="img_pendaftaran_ad/<?= $data['pas_foto']; ?>" alt="Pas Foto Saat Ini" class="current-pas-foto-thumbnail">
                        <input type="hidden" name="old_pas_foto" value="<?= $data['pas_foto']; ?>">
                    <?php endif; ?>
                    <input type="file" id="pas_foto" name="pas_foto" accept="image/*">
                    <small>Biarkan kosong jika tidak ingin mengubah foto.</small>
                </div>

                <button type="submit" name="submit" class="submit-button">Simpan Perubahan</button>
                <a href="lihat_pendaftar_ad.php" class="back-button">Kembali ke Daftar</a>
            </form>
            <?php 
                } // Akhir dari while loop
            ?>
        </div>
    </main>
</body>
</html>
