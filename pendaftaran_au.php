<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Rekrutmen TNI AD</title>
    <!-- Referensi ke file style.css Anda untuk semua gaya -->
    <link rel="stylesheet" href="stylePendaftaran_au.css"> 
</head>
<body>

    <!-- INCLUDE FILE NAVBAR.PHP DI SINI -->
    <?php include 'navbar.php'; ?>

    <main class="main-content">
        <!-- Wadah baru untuk logo dan judul formulir -->
        <div class="header-content-wrapper">
            <!-- Gambar logo TNI AD -->
            <img src="Insignia_of_the_Indonesian_Air_Force.svg.png" alt="Logo TNI AU" class="logo-form">
            <!-- Judul formulir, diberi kelas baru agar spesifik -->
            <h1 class="section-title-form">Formulir Pendaftaran TNI AU</h1>
        </div>
        
        <form action="proses_pendaftaran_au.php" method="post" enctype="multipart/form-data" class="registration-form">
            <!-- Bagian Identitas Diri -->
            <fieldset>
                <legend>Identitas Diri</legend>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap:</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" required>
                </div>
                <div class="form-group">
                    <label for="nik">NIK (Nomor Induk Kependudukan):</label>
                    <input type="text" id="nik" name="nik" placeholder="Masukkan NIK Anda" pattern="\d{16}" title="NIK harus 16 digit angka" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Anda" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <select id="agama" name="agama" required>
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Kristen Katolik">Kristen Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status_perkawinan">Status Perkawinan:</label>
                    <select id="status_perkawinan" name="status_perkawinan" required>
                        <option value="">Pilih Status Perkawinan</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat_lengkap">Alamat Lengkap (sesuai KTP):</label>
                    <textarea id="alamat_lengkap" name="alamat_lengkap" rows="4" placeholder="Masukkan Alamat Lengkap Anda" required></textarea>
                </div>
                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon/HP:</label>
                    <input type="tel" id="nomor_telepon" name="nomor_telepon" placeholder="Contoh: 081234567890" pattern="[0-9]{10,14}" title="Masukkan nomor telepon yang valid (10-14 digit angka)" required>
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email:</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Alamat Email Anda" required>
                </div>
            </fieldset>

            <!-- Bagian Data Keluarga -->
            <fieldset>
                <legend>Data Keluarga</legend>
                <div class="form-group">
                    <label for="nama_ayah">Nama Ayah Kandung:</label>
                    <input type="text" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah Kandung" required>
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                    <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" required>
                </div>
                <div class="form-group">
                    <label for="nama_ibu">Nama Ibu Kandung:</label>
                    <input type="text" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu Kandung" required>
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                    <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_saudara">Jumlah Saudara Kandung:</label>
                    <input type="number" id="jumlah_saudara" name="jumlah_saudara" min="0" placeholder="Masukkan Jumlah Saudara" required>
                </div>
                <div class="form-group">
                    <label for="status_orang_tua">Status Orang Tua:</label>
                    <select id="status_orang_tua" name="status_orang_tua" required>
                        <option value="">Pilih Status Orang Tua</option>
                        <option value="Masih Hidup">Masih Hidup</option>
                        <option value="Meninggal">Meninggal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat_orang_tua">Alamat Orang Tua:</label>
                    <textarea id="alamat_orang_tua" name="alamat_orang_tua" rows="4" placeholder="Masukkan Alamat Lengkap Orang Tua" required></textarea>
                </div>
            </fieldset>

            <!-- Bagian Pendidikan -->
            <fieldset>
                <legend>Pendidikan</legend>
                <div class="form-group">
                    <label for="jenjang_pendidikan">Jenjang Pendidikan Terakhir:</label>
                    <select id="jenjang_pendidikan" name="jenjang_pendidikan" required>
                        <option value="">Pilih Jenjang Pendidikan</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah/Perguruan Tinggi:</label>
                    <input type="text" id="nama_sekolah" name="nama_sekolah" placeholder="Masukkan Nama Sekolah/PT" required>
                </div>
                <div class="form-group">
                    <label for="jurusan_pendidikan">Jurusan:</label>
                    <input type="text" id="jurusan_pendidikan" name="jurusan_pendidikan" placeholder="Masukkan Jurusan (Contoh: IPA, IPS, Teknik Informatika)" required>
                </div>
                <div class="form-group">
                    <label for="tahun_lulus">Tahun Lulus:</label>
                    <input type="number" id="tahun_lulus" name="tahun_lulus" min="1900" max="2099" placeholder="Contoh: 2023" required>
                </div>
                <div class="form-group">
                    <label for="nilai_ipk">Nilai Rata-rata UN/IPK Terakhir:</label>
                    <input type="text" id="nilai_ipk" name="nilai_ipk" placeholder="Contoh: 8.50 atau 3.75" required>
                </div>
            </fieldset>

            <!-- Bagian Kesehatan -->
            <fieldset>
                <legend>Kesehatan</legend>
                <div class="form-group">
                    <label for="tinggi_badan">Tinggi Badan (cm):</label>
                    <input type="number" id="tinggi_badan" name="tinggi_badan" min="150" max="200" placeholder="Contoh: 170" required>
                </div>
                <div class="form-group">
                    <label for="berat_badan">Berat Badan (kg):</label>
                    <input type="number" id="berat_badan" name="berat_badan" min="40" max="120" placeholder="Contoh: 65" required>
                </div>
                <div class="form-group">
                    <label for="riwayat_kesehatan">Riwayat Kesehatan (penyakit kronis, operasi, dll. Jika ada, jelaskan):</label>
                    <textarea id="riwayat_kesehatan" name="riwayat_kesehatan" rows="3" placeholder="Tidak ada / Penyakit X, Operasi Y"></textarea>
                </div>
                <div class="form-group">
                    <label for="kacamata">Menggunakan Kacamata/Lensa Kontak?</label>
                    <select id="kacamata" name="kacamata" required>
                        <option value="">Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
            </fieldset>

            <!-- Bagian Dokumen (Pas Foto, SKCK, Sertifikat) -->
            <fieldset>
                <legend>Dokumen Pendukung</legend>
                <div class="form-group">
                    <label for="pas_foto">Pas Foto Terbaru (Berlatar Merah, format .jpg/.png):</label>
                    <input type="file" id="pas_foto" name="pas_foto" accept=".jpg,.jpeg,.png" required>
                </div>
                <div class="form-group">
                    <label for="skck">SKCK (Surat Keterangan Catatan Kepolisian, format .pdf):</label>
                    <input type="file" id="skck" name="skck" accept=".pdf" required>
                </div>
                <div class="form-group">
                    <label for="sertifikat">Sertifikat Pendidikan/Prestasi (jika ada, format .pdf):</label>
                    <input type="file" id="sertifikat" name="sertifikat" accept=".pdf">
                    <small>Opsional, unggah jika memiliki sertifikat relevan.</small>
                </div>
            </fieldset>

            <div class="form-actions">
                <button type="submit" name="submit_pendaftaran" class="submit-button">Kirim Pendaftaran</button>
                <button type="reset" class="reset-button">Reset Formulir</button>
            </div>
        </form>
        
    </main>

    <script>
        // Mendapatkan semua tombol dropdown
        const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

        // Menambahkan event listener ke setiap tombol dropdown
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah link dari navigasi
                event.stopPropagation(); // Mencegah event mencapai window click listener

                const parentLi = this.closest('li.dropdown');
                if (parentLi) {
                    const dropdownMenu = parentLi.querySelector('.dropdown-menu');

                    // Tutup semua dropdown lain sebelum membuka yang baru
                    document.querySelectorAll('.dropdown-menu.show').forEach(openMenu => {
                        if (openMenu !== dropdownMenu) { // Jangan tutup dropdown yang sedang di-klik
                            openMenu.classList.remove('show');
                        }
                    });

                    // Toggle class 'show' pada dropdown yang terkait
                    if (dropdownMenu) {
                        dropdownMenu.classList.toggle('show');
                    }
                }
            });
        });

        // Menutup dropdown jika klik di luar area dropdown
        window.addEventListener('click', function(event) {
            document.querySelectorAll('.dropdown-menu.show').forEach(openMenu => {
                // Pastikan klik tidak berasal dari dalam dropdown itu sendiri atau tombolnya
                if (!openMenu.contains(event.target) && !event.target.classList.contains('dropdown-toggle')) {
                    openMenu.classList.remove('show');
                }
            });
        });
    </script>
</body>
</html>
