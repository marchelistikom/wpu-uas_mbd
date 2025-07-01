<?php
// navbar.php
// File ini hanya berisi kode HTML untuk navbar

// Mendapatkan nama file saat ini untuk menentukan menu aktif
$current_page = basename($_SERVER['PHP_SELF']); 
?>

<header class="navbar">
    <div class="navbar-brand">
        <img src="http://resepmasakan.9wiki.net/wp-content/uploads/2013/06/LOGO-TENTARA-NASIONAL-INDONESIA-TNI.png" alt="Logo TNI" class="logo-tni"> 
        <a href="halamanUtama.php" style="color: white; text-decoration: none;">Tentara Nasional Indonesia</a>
    </div>
    <nav class="navbar-nav">
        <ul>
            <li class="<?php echo ($current_page == 'halamanUtama.php') ? 'active' : ''; ?>"><a href="halamanUtama.php" class="nav-link">Home</a></li>
            
            <li class="dropdown <?php echo ($current_page == 'sejarah_tni.php' || $current_page == 'struktur_organisasi.php' || $current_page == 'prestasi_tni.php') ? 'active' : ''; ?>">
                <a href="#" class="nav-link dropdown-toggle">Profil TNI</a> <!-- Simbol segitiga ditambahkan di sini -->
                <div class="dropdown-menu">
                    <a href="sejarah_tni.php" class="dropdown-item">Sejarah Singkat TNI</a>
                    <a href="struktur_organisasi.php" class="dropdown-item">Struktur Organisasi</a>
                    <a href="prestasi_tni.php" class="dropdown-item">Prestasi TNI</a>
                </div>
            </li>
            
            <li class="<?php echo ($current_page == 'berita.php') ? 'active' : ''; ?>"><a href="berita.php" class="nav-link">Berita</a></li>
            
            <li class="dropdown <?php echo (strpos($current_page, 'pendaftaran_') !== false && $current_page !== 'pendaftaran_ad.php' && $current_page !== 'pendaftaran_al.php' && $current_page !== 'pendaftaran_au.php' && $current_page !== 'pendaftaran_alu.php' && $current_page !== 'pendaftaran_ac.php') ? 'active' : ''; ?>">
                <a href="#" class="nav-link dropdown-toggle">Pendaftaran Rekrutmen</a> <!-- Simbol segitiga ditambahkan di sini -->
                <div class="dropdown-menu">
                    <a href="pendaftaran_ad.php" class="dropdown-item">Pendaftaran Rekrutmen TNI AD</a>
                    <a href="pendaftaran_al.php" class="dropdown-item">Pendaftaran Rekrutmen TNI AL</a>
                    <a href="pendaftaran_au.php" class="dropdown-item">Pendaftaran Rekrutmen TNI AU</a>
                    <a href="pendaftaran_alu.php" class="dropdown-item">Pendaftaran Rekrutmen TNI Angkatan Luar Angkasa</a>
                    <a href="pendaftaran_ac.php" class="dropdown-item">Pendaftaran Rekrutmen TNI Angkatan Cyber</a>
                </div>
            </li>

            <!-- Menu Dropdown Baru: Lihat Pendaftar -->
            <li class="dropdown <?php echo (
                $current_page == 'lihat_pendaftar_ad.php' ||
                $current_page == 'lihat_pendaftar_al.php' ||
                $current_page == 'lihat_pendaftar_au.php' ||
                $current_page == 'lihat_pendaftar_alu.php' ||
                $current_page == 'lihat_pendaftar_ac.php'
            ) ? 'active' : ''; ?>">
                <a href="#" class="nav-link dropdown-toggle">Lihat Pendaftar</a> <!-- Simbol segitiga untuk menu baru -->
                <div class="dropdown-menu">
                    <a href="lihat_pendaftar_ad.php" class="dropdown-item">Lihat Pendaftar TNI AD</a>
                    <a href="lihat_pendaftar_al.php" class="dropdown-item">Lihat Pendaftar TNI AL</a>
                    <a href="lihat_pendaftar_au.php" class="dropdown-item">Lihat Pendaftar TNI AU</a>
                    <a href="lihat_pendaftar_alu.php" class="dropdown-item">Lihat Pendaftar TNI <br>Angkatan Luar Angkasa</a>
                    <a href="lihat_pendaftar_ac.php" class="dropdown-item">Lihat Pendaftar TNI <br> Angkatan Cyber</a>
                </div>
            </li>
            
            <li class="<?php echo ($current_page == 'kontak.php') ? 'active' : ''; ?>"><a href="kontak.php" class="nav-link">Kontak</a></li>
        </ul>
    </nav>
</header>
