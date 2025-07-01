<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi TNI - Tentara Nasional Indonesia</title>
    <!-- Referensi ke file style.css Anda untuk semua styling -->
    <link rel="stylesheet" href="stylePrestasiTni.css"> 
</head>
<body>

    <!-- INCLUDE FILE NAVBAR.PHP DI SINI -->
    <?php include 'navbar.php'; ?>

    <main class="main-content">
        <h1 class="section-title">Kegiatan dan Prestasi Tentara Nasional Indonesia</h1>

        <div class="large-canvas">
            <!-- Kartu Kegiatan/Prestasi 1 -->
            <div class="activity-card">
                <div class="card-header">
                    <img src="th (2).jpeg" class="card-image">
                    <h3 class="card-title">Bantuan Kemanusiaan</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">TNI selalu hadir membantu masyarakat dalam berbagai situasi darurat dan bencana, mulai dari penyaluran bantuan hingga evakuasi korban.</p>
                </div>
            </div>

            <!-- Kartu Kegiatan/Prestasi 2 -->
            <div class="activity-card">
                <div class="card-header">
                    <img src="https://mili.id/content/uploads/gladih_bersih_koarmada_ii.jpg" class="card-image">
                    <h3 class="card-title">Menjaga Kedaulatan</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">Dedikasi dan profesionalisme TNI dalam menjaga kedaulatan dan keutuhan Negara Kesatuan Republik Indonesia dari berbagai ancaman.</p>
                </div>
            </div>

            <!-- Kartu Kegiatan/Prestasi 3 -->
            <div class="activity-card">
                <div class="card-header">
                    <img src="th (3).jpeg" class="card-image">
                    <h3 class="card-title">Latihan Militer</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">Latihan rutin yang intensif dan modern untuk menjaga kesiapan tempur serta profesionalisme prajurit TNI di segala medan.</p>
                </div>
            </div>

            <!-- Anda bisa menambahkan kartu-kartu lain di sini -->
            <div class="activity-card">
                <div class="card-header">
                    <img src="th (4).jpeg" class="card-image">
                    <h3 class="card-title">Misi Perdamaian</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">Kontribusi aktif TNI dalam misi perdamaian PBB di berbagai negara, menunjukkan peran Indonesia di kancah internasional.</p>
                </div>
            </div>

            <div class="activity-card">
                <div class="card-header">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.aRIMf80Sx60TCljQGG68lAHaEK&pid=Api&P=0&h=180" class="card-image">
                    <h3 class="card-title">Inovasi Teknologi Militer</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">Pengembangan dan penerapan teknologi mutakhir untuk memperkuat sistem pertahanan dan keamanan nasional.</p>
                </div>
            </div>

            <div class="activity-card">
                <div class="card-header">
                    <img src="terjun-kopassus_2806_20150628_135756.jpg" class="card-image">
                    <h3 class="card-title">Pelatihan Bersama</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">Partisipasi TNI dalam latihan militer gabungan dengan negara-negara sahabat untuk meningkatkan interoperabilitas dan pertukaran pengetahuan.</p>
                </div>
            </div>
            <div class="activity-card">
                <div class="card-header">
                    <img src="IMG-20190402-WA0025.webp" class="card-image">
                    <h3 class="card-title">Juara Lomba Menambak <br>AASAM</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">Partisipasi TNI dalam lomba menembak AASAM.</p>
                </div>
            </div>
            <div class="activity-card">
                <div class="card-header">
                    <img src="WhatsApp-Image-2021-04-09-at-16.36.33.jpeg" class="card-image">
                    <h3 class="card-title">Pasukan Penjaga Perdamaian Kontingen Garuda</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">Partisipasi TNI dalam menjaga perdamaian dunia.</p>
                </div>
            </div>
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
    </script>
</body>
</html>
