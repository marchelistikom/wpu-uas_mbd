<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - TNI AD</title>
    <link rel="stylesheet" href="style_kontak.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <!-- Notifikasi -->
    <?php if (isset($_GET['status'])): ?>
        <div class="notif <?php echo $_GET['status'] === 'sukses' ? 'notif-sukses' : 'notif-gagal'; ?>">
            <?php echo $_GET['status'] === 'sukses' ? 'Pesan berhasil dikirim!' : 'Terjadi kesalahan saat mengirim pesan.'; ?>
        </div>
    <?php endif; ?>

    <main class="kontak-container">
        <section class="kontak-info">
            <h1>Hubungi Kami</h1>
            <p>Jika Anda memiliki pertanyaan, saran, atau memerlukan informasi lebih lanjut, silakan hubungi kami melalui informasi berikut atau isi formulir di bawah ini.</p>

            <ul class="info-list">
                <li><strong>Alamat:</strong> Mabes TNI AD, Jl. Veteran No. 5, Jakarta Pusat, Indonesia</li>
                <li><strong>Telepon:</strong> (021) 845-6789</li>
                <li><strong>Email:</strong> info@tniad.mil.id</li>
                <li><strong>Jam Operasional:</strong> Senin - Jumat, 08.00 - 16.00 WIB</li>
            </ul>
        </section>

        <section class="form-section">
            <h2>Kirim Pesan</h2>
            <form action="proses_kontak.php" method="POST" class="form-kontak">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan Anda</label>
                    <textarea name="pesan" id="pesan" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn-kirim">Kirim Pesan</button>
            </form>
        </section>
    </main>

    <script>
        // Sembunyikan notifikasi setelah 4 detik
        const notif = document.querySelector('.notif');
        if (notif) {
            setTimeout(() => {
                notif.style.opacity = '0';
                notif.style.transform = 'translateY(-20px)';
            }, 4000);
        }
    </script>
</body>
</html>
