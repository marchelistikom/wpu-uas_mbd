<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi TNI - Pendaftaran Tentara Nasional Indonesia</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styling khusus untuk GoJS Org Chart */
        #gojsDiagramDiv {
            width: 100%;
            height: 1000px; /* Dikembalikan ke ukuran sebelumnya */
            background-color: #fcfcfc;
            border: 1px solid #eee;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            margin: 20px auto; /* Pusatkan diagram */
        }

        /* Styling untuk konten list (p, ul, li) */
        .tni-structure-section p,
        .tni-structure-section ul,
        .tni-structure-section li {
            font-size: 1.1em; /* Perbesar ukuran font untuk teks */
            line-height: 1.8; /* Tingkatkan jarak antar baris */
        }

        .tni-structure-section ul ul {
            margin-left: 20px; /* Beri indentasi untuk sub-list */
            font-size: 1em; /* Ukuran font tetap atau sedikit lebih kecil untuk sub-list */
        }
        
        /* Gaya untuk gambar logo di dalam section */
        .tni-structure-section img {
            display: block; /* Pastikan gambar berada di barisnya sendiri */
            margin: 20px auto; /* Pusatkan gambar */
            border-radius: 8px; /* Tambahkan sedikit rounded corners */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Tambahkan shadow */
            width: 200px; /* Diperbesar */
            height: 200px; /* Diperbesar */
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <main class="main-content">
        <h1>Struktur Organisasi Tentara Nasional Indonesia</h1>

        <section class="tni-structure-section">
            <h2>1. Struktur Organisasi TNI Ring 1 (Umum)</h2>
            <div id="gojsDiagramDiv"></div>
        </section>

        <section class="tni-structure-section">
            <h2>2. Struktur Organisasi Tentara Nasional Indonesia Angkatan Darat (TNI AD)</h2>
            <img src="Insignia_of_the_Indonesian_Army.svg.png" alt="Logo TNI AD">
            <p>Hierarki komando dalam tubuh TNI Angkatan Darat.</p>
            <ul>
                <li><strong>Presiden Republik Indonesia</strong></li>
                <li><strong>Menteri Pertahanan</strong></li>
                <li><strong>Panglima Tentara Nasional Indonesia</strong></li>
                <li><strong>Kepala Staf Angkatan Darat (KSAD)</strong>
                    <ul>
                        <li>Sebagai pimpinan tertinggi di Angkatan Darat, bertanggung jawab atas pembinaan kekuatan dan penggunaan kekuatan TNI AD.</li>
                    </ul>
                </li>
                <li><strong>Bawahan KSAD (Contoh):</strong>
                    <ul>
                        <li>Wakil Kepala Staf Angkatan Darat (Wakil KSAD)</li>
                        <li>Inspektur Jenderal Angkatan Darat (Irjenad)</li>
                        <li>Para Asisten KSAD (Intelijen, Operasi, Personel, Logistik, Teritorial, Perencanaan Umum, Pengawasan Umum)</li>
                        <li>Panglima Komando Utama (Kotama) seperti Pangdam (Panglima Daerah Militer), Pangkostrad, Danjen Kopassus.</li>
                        <li>Kepala Badan Pelaksana Pusat (Kabalakpus) seperti Danpuspomad, Dirajenad, Kahubad.</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="tni-structure-section">
            <h2>3. Struktur Organisasi Tentara Nasional Indonesia Angkatan Laut (TNI AL)</h2>
            <img src="Insignia_of_the_Indonesian_Navy.svg.png" alt="Logo TNI AL">
            <p>Hierarki komando dalam tubuh TNI Angkatan Laut.</p>
            <ul>
                <li><strong>Presiden Republik Indonesia</strong></li>
                <li><strong>Menteri Pertahanan</strong></li>
                <li><strong>Panglima Tentara Nasional Indonesia</strong></li>
                <li><strong>Kepala Staf Angkatan Laut (KSAL)</strong>
                    <ul>
                        <li>Sebagai pimpinan tertinggi di Angkatan Laut, bertanggung jawab atas pembinaan kekuatan dan penggunaan kekuatan TNI AL.</li>
                    </ul>
                </li>
                <li><strong>Bawahan KSAL (Contoh):</strong>
                    <ul>
                        <li>Wakil Kepala Staf Angkatan Laut (Wakil KSAL)</li>
                        <li>Inspektur Jenderal Angkatan Laut (Irjenal)</li>
                        <li>Para Asisten KSAL (Intelijen, Operasi, Personel, Logistik, Perencanaan Umum, Potensi Maritim)</li>
                        <li>Panglima Komando Utama (Kotama) seperti Pangkoarmada (Panglima Komando Armada), Dankormar (Komandan Korps Marinir), Gubernur AAL.</li>
                        <li>Kepala Badan Pelaksana Pusat (Kabalakpus) seperti Danpuspomal, Kadispenal.</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="tni-structure-section">
            <h2>4. Struktur Organisasi Tentara Nasional Indonesia Angkatan Udara (TNI AU)</h2>
            <img src="Insignia_of_the_Indonesian_Air_Force.svg.png" alt="Logo TNI AU">
            <p>Hierarki komando dalam tubuh TNI Angkatan Udara.</p>
            <ul>
                <li><strong>Presiden Republik Indonesia</strong></li>
                <li><strong>Menteri Pertahanan</strong></li>
                <li><strong>Panglima Tentara Nasional Indonesia</strong></li>
                <li><strong>Kepala Staf Angkatan Udara (KSAU)</strong>
                    <ul>
                        <li>Sebagai pimpinan tertinggi di Angkatan Udara, bertanggung jawab atas pembinaan kekuatan dan penggunaan kekuatan TNI AU.</li>
                    </ul>
                </li>
                <li><strong>Bawahan KSAU (Contoh):</strong>
                    <ul>
                        <li>Wakil Kepala Staf Angkatan Udara (Wakil KSAU)</li>
                        <li>Inspektur Jenderal Angkatan Udara (Irjenau)</li>
                        <li>Para Asisten KSAU (Intelijen, Operasi, Personel, Logistik, Perencanaan Umum, Potensi Dirgantara)</li>
                        <li>Panglima Komando Utama (Kotama) seperti Pangkoopsud (Panglima Komando Operasi Udara), Dankorpaskhas, Gubernur AAU.</li>
                        <li>Kepala Badan Pelaksana Pusat (Kabalakpus) seperti Danpuspomau, Kadispenau.</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="tni-structure-section">
            <h2>5. Struktur Organisasi Tentara Nasional Indonesia Angkatan Luar Angkasa (TNI ALU)</h2>
            <img src="ChatGPT Image 20 Jun 2025, 11.43.37.png" alt="Logo TNI ALU">
            <p>Hierarki komando untuk visi hipotetis TNI Angkatan Luar Angkasa.</p>
            <ul>
                <li><strong>Presiden Republik Indonesia</strong></li>
                <li><strong>Menteri Pertahanan</strong></li>
                <li><strong>Panglima Tentara Nasional Indonesia</strong></li>
                <li><strong>Kepala Staf Angkatan Luar Angkasa (KSALU)</strong>
                    <ul>
                        <li>Sebagai pimpinan tertinggi di Angkatan Luar Angkasa, bertanggung jawab atas pembinaan dan operasi di domain luar angkasa.</li>
                    </ul>
                </li>
                <li><strong>Bawahan KSALU (Contoh Konseptual):</strong>
                    <ul>
                        <li>Wakil Kepala Staf Angkatan Luar Angkasa (Wakil KSALU)</li>
                        <li>Direktur Jenderal Operasi Luar Angkasa</li>
                        <li>Direktur Jenderal Pengembangan Teknologi Antariksa Militer</li>
                        <li>Komandan Pangkalan Antariksa</li>
                        <li>Kepala Staf Logistik Orbit</li>
                        <li>Kepala Pusat Intelijen Antariksa</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="tni-structure-section">
            <h2>6. Struktur Organisasi Tentara Nasional Indonesia Angkatan Cyber (TNI AC)</h2>
            <img src="ChatGPT Image 19 Jun 2025, 16.34.53.png" alt="Logo TNI AC">
            <p>Hierarki komando untuk visi hipotetis TNI Angkatan Cyber.</p>
            <ul>
                <li><strong>Presiden Republik Indonesia</strong></li>
                <li><strong>Menteri Pertahanan</strong></li>
                <li><strong>Panglima Tentera Nasional Indonesia</strong></li>
                <li><strong>Kepala Staf Angkatan Cyber (KSAC)</strong>
                    <ul>
                        <li>Sebagai pimpinan tertinggi di Angkatan Cyber, bertanggung jawab atas pertahanan dan operasi di ranah siber nasional.</li>
                    </ul>
                </li>
                <li><strong>Bawahan KSAC (Contoh Konseptual):</strong>
                    <ul>
                        <li>Wakil Kepala Staf Angkatan Cyber (Wakil KSAC)</li>
                        <li>Direktur Jenderal Operasi Siber</li>
                        <li>Direktur Jenderal Keamanan Jaringan</li>
                        <li>Kepala Pusat Intelijen Siber</li>
                        <li>Kepala Pusat Pengembangan Strategi Siber</li>
                        <li>Tim Respons Insiden Siber (CSIRT)</li>
                    </ul>
                </li>
            </ul>
        </section>

    </main>

    <script src="https://unpkg.com/gojs@2.3.11/release/go.js"></script>

    <script>
        // Memastikan kode GoJS berjalan setelah DOM siap
        window.addEventListener('DOMContentLoaded', initGoJS);

        function initGoJS() {
            // go.Diagram adalah objek utama diagram GoJS
            const $ = go.GraphObject.make;

            const myDiagram =
                $(go.Diagram, "gojsDiagramDiv",
                    {
                        initialAutoScale: go.Diagram.Uniform,
                        initialContentAlignment: go.Spot.Center,
                        "undoManager.isEnabled": true,
                        layout: $(go.TreeLayout, // Menggunakan TreeLayout untuk struktur pohon
                            {
                                angle: 90,
                                layerSpacing: 250, // Jarak vertikal antar layer (Diperbesar lagi)
                                nodeSpacing: 200,  // Jarak horizontal antar node (Diperbesar lagi)
                                // Memastikan root (Presiden) berada di tengah horizontal
                                arrangement: go.TreeLayout.ArrangementFixedRoots,
                                arrangementSpacing: new go.Size(220, 220) // Menyesuaikan jarak antar subtree (Diperbesar lagi)
                            }),
                    });

            // Mendefinisikan Node Template (desain setiap kotak)
            // Node Template (dalam initGoJS)
myDiagram.nodeTemplate =
  $(go.Node, "Auto",
    { resizable: false },
    $(go.Shape, "RoundedRectangle",
      {
        fill: "white", stroke: "#ddd", strokeWidth: 1,
        minSize: new go.Size(600,400),
        maxSize: new go.Size(600, NaN)
      }
    ),
    $(go.Panel, "Vertical",
      { margin: 10, alignment: go.Spot.Center },
      // Foto
      $(go.Picture,
        { desiredSize: new go.Size(200,200), margin: new go.Margin(0,0,10,0) },
        new go.Binding("source", "photo")
      ),
      // NAMA
      $(go.TextBlock,
        {
          font: "bold 2.2em Arial, sans-serif",
          stroke: "#333",
          wrap: go.TextBlock.WrapWord,
          textAlign: "center",
          width: 350,
          overflow: go.TextBlock.OverflowClip,
          margin: new go.Margin(0, 0, 4, 0)
        },
        new go.Binding("text", "name")
      ),
      // JABATAN
      $(go.TextBlock,
        {
          font: "1.6em Arial, sans-serif",
          stroke: "#666",
          wrap: go.TextBlock.WrapWord,
          textAlign: "center",
          width: 350,
          overflow: go.TextBlock.OverflowClip,
          margin: new go.Margin(6, 0, 0, 0) // <-- Tambah jarak atas di sini
        },
        new go.Binding("text", "title")
      )
    )
  );

            // Mendefinisikan Link Template (desain garis koneksi)
            myDiagram.linkTemplate =
                $(go.Link,
                    {
                        routing: go.Link.Orthogonal,
                        corner: 5,
                    },
                    $(go.Shape,
                        { strokeWidth: 8, stroke: "#888" } /* Ketebalan garis (Diperbesar) */
                    )
                );

            // Data Node (Kotak)
            myDiagram.model = new go.GraphLinksModel(
                [
                    { key: "presiden", name: "Prabowo Subianto", title: "Presiden Republik Indonesia", photo: "prabowo_subianto.jpeg" },
                    { key: "wapres", name: "Gibran Rakabuming Raka", title: "Wakil Presiden Republik Indonesia", photo: "gibran_rakabuming.jpeg" },
                    { key: "menhan", name: "Sjafrie Sjamsoeddin", title: "Menteri Pertahanan", photo: "sjafrie_sjamsoedin.jpeg" },
                    { key: "panglima", name: "Jenderal TNI Agus Subiyanto", title: "Panglima Tentara Nasional Indonesia", photo: "agus_subiyanto.jpeg" },
                    { key: "ksad", name: "Jenderal TNI Maruli Simanjuntak", title: "Kepala Staf Angkatan Darat (KSAD)", photo: "maruli_simanjuntak.jpeg" },
                    { key: "ksal", name: "Laksamana TNI Muhammad Ali", title: "Kepala Staf Angkatan Laut (KSAL)", photo: "muhammad_ali.jpeg" },
                    { key: "ksau", name: "Marsekal TNI Fadjar Prasetyo", title: "Kepala Staf Angkatan Udara (KSAU)", photo: "t_500x300 (1).jpeg" },
                    { key: "ksalu", name: "Nama KSALU", title: "Kepala Staf Angkatan Luar Angkasa (KSALU)", photo: "ChatGPT Image 15 Jun 2025, 20.06.06.png"}, /* Placeholder image disesuaikan */
                    { key: "ksac", name: "Nama KSAC", title: "Kepala Staf Angkatan Cyber (KSAC)", photo: "ChatGPT Image 15 Jun 2025, 20.05.58.png" } /* Placeholder image disesuaikan */
                ],
                [
                    { from: "presiden", to: "wapres" },
                    { from: "presiden", to: "menhan" },
                    { from: "menhan", to: "panglima" },
                    { from: "wapres", to: "panglima" },
                    { from: "panglima", to: "ksad" },
                    { from: "panglima", to: "ksal" },
                    { from: "panglima", to: "ksau" },
                    { from: "panglima", to: "ksalu" },
                    { from: "panglima", to: "ksac" }
                ]
            );
        }
    </script>
</body>
</html>
