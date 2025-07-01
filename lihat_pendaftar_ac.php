<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Pendaftar TNI AC</title>
    <!-- CSS khusus untuk halaman ini (tabel, canvas, logo di header) -->
    <link rel="stylesheet" href="style_lihat_pendaftar_ac.css">
    <!-- Font Awesome untuk ikon (Pensil, Tong Sampah, dan Plus) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Sertakan file navbar.php -->
    <?php include 'navbar.php'; ?>

    <main class="main-content">
        <!-- Wadah untuk logo dan judul formulir, dipusatkan dengan flexbox di CSS -->
        <div class="header-content-wrapper">
            <!-- Menggunakan placeholder image untuk logo TNI AC -->
            <img src="ChatGPT Image 19 Jun 2025, 16.34.53.png" alt="Logo TNI AC" class="logo-form">
            <h1 class="section-title-form">Data Pendaftar TNI AC</h1>
        </div>

        <div class="table-container">
            <!-- Container untuk Tombol Tambah dan Form Pencarian -->
            <div class="table-controls-container">
                <!-- Tombol Tambah Pendaftar -->
                <a href="pendaftaran_ac.php" class="add-new-button">
                    <i class="fas fa-plus"></i> Tambah Pendaftar
                </a>

                <!-- Form Pencarian -->
                <form action="" method="GET" class="search-form">
                    <input type="text" name="keyword" placeholder="Cari Nama atau NIK..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>" class="search-input">
                    <button type="submit" class="search-button">Cari <i class="fas fa-search"></i></button>
                    <?php if (isset($_GET['keyword']) && $_GET['keyword'] != ''): ?>
                        <a href="lihat_pendaftar_ac.php" class="reset-search-button">Reset</a>
                    <?php endif; ?>
                </form>
            </div>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Nama Sekolah</th>
                        <th>Pas Foto (3x4)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi ke database
                    $koneksi = mysqli_connect("localhost", "root", "", "dbuas");

                    // Periksa koneksi
                    if (!$koneksi) {
                        die("Koneksi database gagal: " . mysqli_connect_error());
                    }

                    // Query dasar sesuai yang Anda berikan (untuk pendaftaran_ac)
                    $query_show_data = "SELECT 
                                            nama_lengkap, 
                                            nik, 
                                            agama, 
                                            jenis_kelamin, 
                                            tanggal_lahir, 
                                            tempat_lahir, 
                                            email, 
                                            nomor_telepon, 
                                            nama_sekolah, 
                                            pas_foto
                                         FROM pendaftaran_ac"; // Pastikan tabel ini benar

                    // Tambahkan logika pencarian jika ada keyword
                    if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
                        $keyword = $_GET['keyword']; 
                        $query_show_data .= " WHERE nama_lengkap LIKE '%$keyword%' OR nik LIKE '%$keyword%'";
                    }

                    $eksekusi_query_show_data = mysqli_query($koneksi, $query_show_data);

                    $no = 1; // Inisialisasi nomor urut

                    // Perulangan untuk menampilkan data
                    while ($data = mysqli_fetch_array($eksekusi_query_show_data)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama_lengkap']; ?></td>
                            <td><?php echo $data['nik']; ?></td>
                            <td><?php echo $data['agama']; ?></td>
                            <td><?php echo $data['jenis_kelamin']; ?></td> 
                            <td><?php echo $data['tanggal_lahir']; ?></td>
                            <td><?php echo $data['tempat_lahir']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['nomor_telepon']; ?></td>
                            <td><?php echo $data['nama_sekolah']; ?></td>
                            <td class="pas-foto-cell">
                                <?php if (!empty($data['pas_foto'])): ?>
                                    <img src="img_pendaftaran_ac/<?php echo $data["pas_foto"]; ?>" alt="Pas Foto" class="pas-foto-thumbnail">
                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </td>
                            <td class="action-buttons-cell">
                                <!-- Link Edit Data Pendaftar AC -->
                                <a href="edit_pendaftar_ac.php?nik=<?php echo $data['nik']; ?>" class="action-button edit-button" title="Edit Data">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <!-- Link Hapus Data Pendaftar AC -->
                                <a href="proses_hapus_pendaftar_ac.php?nik=<?php echo $data['nik']; ?>" class="action-button delete-button" title="Hapus Data" onclick="return confirm('Apakah Anda yakin ingin menghapus data <?php echo $data['nama_lengkap']; ?>?');">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    } // Akhir dari while loop

                    // Tutup koneksi database
                    mysqli_close($koneksi);
                    ?>
                </tbody>
            </table>
        </div>
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

        // Logika untuk menampilkan notifikasi (jika ada parameter status di URL) - opsional, Anda bisa implementasikan ini di file terpisah atau di sini
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            const message = urlParams.get('message');

            if (status === 'success_update') {
                showNotification('Data berhasil diperbarui!', 'success');
            } else if (status === 'error') {
                showNotification('Terjadi kesalahan: ' + (message || 'Unknown error'), 'error');
            } else if (status === 'success_add') {
                showNotification('Data berhasil ditambahkan!', 'success');
            }
        });

        function showNotification(message, type) {
            // Implementasi tampilan notifikasi, contoh sederhana:
            const notificationContainer = document.createElement('div');
            notificationContainer.className = 'notification-container'; // Anda perlu CSS untuk ini
            document.body.appendChild(notificationContainer);

            const notification = document.createElement('div');
            notification.className = 'notification ' + type; // Anda perlu CSS untuk ini
            notification.textContent = message;
            notificationContainer.appendChild(notification);

            setTimeout(() => {
                notification.style.opacity = '0';
                notification.style.transform = 'translateY(-20px)';
                setTimeout(() => {
                    notification.remove();
                    if (notificationContainer.children.length === 0) {
                        notificationContainer.remove();
                    }
                }, 500); 
            }, 3000); 
        }
    </script>
</body>
</html>
