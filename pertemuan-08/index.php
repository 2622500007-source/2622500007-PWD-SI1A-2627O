
<?php
session_start();

$tahun = date("Y");
$namaWebsite = "Nadé Crochet";

$pesanKonfirmasi = $_SESSION["pesanKonfirmasi"] ?? "";
unset($_SESSION["pesanKonfirmasi"]);

$pesanGagal = "";
$statusPendaftaran = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nama = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $telepon = trim($_POST["telepon"] ?? "");
    $product = trim($_POST["product"] ?? "");
    $pesan = trim($_POST["pesan"] ?? "");

    // Validasi nama
    if ($nama === "" || mb_strlen($nama) < 3) {
        $pesanGagal = "Nama lengkap wajib diisi minimal 3 karakter.";
    }

    // Validasi email
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $pesanGagal = "Format email tidak valid. Silakan periksa kembali.";
    }

    // Validasi nomor telepon
    elseif (!preg_match("/^[0-9]{10,15}$/", $telepon)) {
        $pesanGagal = "Nomor telepon harus terdiri dari 10 sampai 15 angka.";
    }

    // Validasi pilihan produk
    elseif (!in_array($product, [
        "Amigurumi",
        "Crochet Keychain",
        "Crochet Bouquet"
    ], true)) {
        $pesanGagal = "Silakan pilih jenis crochet terlebih dahulu.";
    }

    // Validasi pesan
    elseif ($pesan === "" || mb_strlen($pesan) < 5) {
        $pesanGagal = "Pesan wajib diisi minimal 5 karakter.";
    }

    // Jika semua validasi berhasil
    else {
        $namaAman = htmlspecialchars(
            $nama,
            ENT_QUOTES,
            "UTF-8"
        );

        $_SESSION["pesanKonfirmasi"] =
            "Terima kasih, " . $namaAman .
            "! Pendaftaran kamu berhasil.";

        header("Location: index.php#registration");
        exit;
    }

    // Jika validasi gagal
    if ($pesanGagal !== "") {
        $statusPendaftaran = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $namaWebsite ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- WELCOME OVERLAY -->
    <div class="welcome-overlay" id="welcomeOverlay">
    <div class="welcome-card">

        <p class="welcome-eyebrow">
            ✿ WELCOME TO ✿
        </p>

        <img src="img/bg-rajut.jpg"
             alt="Koleksi rajutan Nadé Crochet"
             class="welcome-image">

        <h1>
            A Little World<br>
            <span>of Handmade Love</span>
        </h1>

        <p class="welcome-description">
            Little things, made with love and joy.
        </p>

        <button id="enterWebsite">
            Enter My Little World →
        </button>

        <p class="welcome-footer">
            Handmade with love, stitch by stitch ♡
        </p>
     </div>
    </div>


    <div class="container">
    <aside class="sidebar">
    <div class="brand">
    <a href="#home" class="brand-logo" aria-label="Kembali ke Home">
        <img src="img/Nadé Crochet Yarn.png" alt="Logo Nadé Crochet">
    </a>
    <h2>Nadé Crochet</h2>
    <p>Handmade with Love and Joy</p>
    </div>

        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#profile">Profile</a></li>
                <li><a href="#product">Product</a></li>
                <li><a href="#registration">Registration</a></li>
            </ul>
        </nav>

        <!-- MINI MUSIC PLAYER -->
    <div class="music-widget">

        <!-- Tombol buka/tutup player -->
        <button id="playerLauncher"
            type="button"
        title="Open Music Player"
        aria-expanded="false">
        ♫
        </button>

        <!-- Panel Music Player -->
        <div class="mini-player" id="playerPanel" hidden>

        <audio id="bgMusic" preload="auto">
            <source src="audio/song1.mp3" type="audio/mpeg">
        </audio>

        <div class="mini-player-info">
            <span>A Cozy Moment</span>
            <small id="musicStatus">♫ Ready to Play ♫</small>
        </div>

        <!-- Kontrol Musik -->
        <div class="music-navigation">

            <button id="prevSong" type="button"
                    aria-label="Previous Song">❮</button>

            <button id="playPause" type="button"
                    aria-label="Play Music">▶</button>

            <button id="nextSong" type="button"
                    aria-label="Next Song">❯</button>

        </div>

        <!-- Volume -->
        <input
            type="range"
            id="volumeControl"
            min="0"
            max="1"
            step="0.1"
            value="0.3">
    </div>
</div>
    </aside>

    <main class="main-content">

        <header class="site-header">
    <div>
        <p class="header-eyebrow">WELCOME TO NADÉ CROCHET</p>
        <h2>A Little World of Handmade Creations</h2>
        <p>Every stitch tells a story ♡</p>
    </div>

    <div class="header-decoration">
        ✿
    </div>
    </header>

        <!-- Bagian Home -->
        <section id="home" class="home-section">
    <div class="hero">
    <div class="hero-text">
        <p class="eyebrow">
            A LITTLE WORLD OF CROCHET.
        </p>
            <h1>
                Little things,<br>
                <span>made with love.</span>
            </h1>

            <p>
                Selamat datang di dunia kecil Nadé Crochet.
                Temukan berbagai karya rajutan handmade
                yang dibuat dengan teliti, kreatif,
                dan penuh kehangatan.
            </p>

            <a href="#product" class="hero-button">
                Explore Collection →
            </a>

        </div>

        <div class="hero-image">
            <img src="img/lovely-things.jpeg"
                 alt="Koleksi rajutan Nadé Crochet">

            <div class="image-caption">
                Little handmade treasures ♡
            </div>
        </div>
    </div>

    <div class="highlight">
    <div class="highlight-card">
        <h3>♡ Handmade with Love</h3>
        <p>Setiap karya dibuat dengan sepenuh hati.</p>
    </div>

    <div class="highlight-card">
        <h3>✿ Unique Creation</h3>
        <p>Memiliki sentuhan kreatif dan personal.</p>
    </div>

    <div class="highlight-card">
        <h3>♧ Special Gift</h3>
        <p>Hadiah manis untuk orang tersayang.</p>
    </div>
</div>
</section>


        <!-- Bagian Profile -->
    <section id="profile" class="profile-section">
    <div class="section-heading">
        <p class="eyebrow">THE STORY BEHIND THE STITCH</p>
        <h2>Meet the Maker</h2>
        <p>A little curiosity, turned into something lovely.</p>
    </div>

    <!-- INTRODUCTION -->
    <div class="profile-card">

        <div class="profile-photo">
            <img src="img/owner-profil.jpeg"
                 alt="Pemilik Nadé Crochet">

            <div class="photo-caption">
                <span>♡</span> The Maker
            </div>
        </div>

        <div class="profile-info">

            <p class="profile-label">HELLO, NICE TO MEET YOU!</p>
            <h3>Hi, I'm Nadiyah.</h3>

            <p class="profile-description">
                I'm the person behind Nadé Crochet, a little
                creative space filled with handmade creations
                and lovely little ideas.
            </p>

            <p>
                Berawal dari rasa penasaran untuk mencoba hal
                baru, saya menemukan kesenangan dalam seni
                merajut. Kini, setiap karya menjadi bagian dari
                perjalanan kecil saya dalam bereksplorasi
                dan berkreasi.
            </p>

            <div class="profile-details">

                <div>
                    <span>OWNER</span>
                    <strong>Nadiyah Salma</strong>
                </div>

                <div>
                    <span>STUDY PROGRAM</span>
                    <strong>Sistem Informasi</strong>
                </div>

                <div>
                    <span>BRAND</span>
                    <strong>Nadé Crochet</strong>
                </div>

            </div>

            <p class="profile-signature">
                A Curious Soul, A Creative Heart. ♡
            </p>

        </div>
    </div>

    <!-- BRAND STORY -->
    <div class="profile-story">

        <div class="story-heading">
            <p class="eyebrow">A LITTLE STORY</p>
            <h3>From Curiosity to Creativity</h3>
        </div>

        <p>
            Nadé Crochet berawal dari keinginan sederhana untuk
            mencoba sesuatu yang baru. Awalnya hanya kegiatan
            untuk mengisi waktu luang, tetapi perlahan merajut
            menjadi aktivitas yang menyenangkan dan membuat
            saya terus ingin bereksplorasi.
        </p>

        <p>
            Bagi saya, handmade memiliki keistimewaan tersendiri.
            Setiap proses membutuhkan kesabaran, ketelitian,
            dan kreativitas. Dari benang sederhana, sesuatu
            yang unik dan bermakna dapat tercipta.
        </p>

        <p>
            Melalui Nadé Crochet, saya ingin berbagi hasil
            karya kecil yang dibuat dengan sepenuh hati.
            Setiap rajutan mungkin sederhana, tetapi selalu
            memiliki cerita di baliknya.
        </p>

    </div>

    <!-- HANDMADE PHILOSOPHY -->
    <div class="profile-philosophy">

        <div class="story-heading">
            <p class="eyebrow">WHAT MAKES HANDMADE SPECIAL</p>
            <h3>Our Handmade Philosophy</h3>
            <p>Every creation has its own little meaning.</p>
        </div>

        <div class="philosophy-grid">

            <div class="philosophy-card">
                <span class="philosophy-icon">♡</span>
                <h4>Patience</h4>
                <p>
                    Setiap karya membutuhkan waktu,
                    kesabaran, dan perhatian pada
                    setiap detailnya.
                </p>
            </div>

            <div class="philosophy-card">
                <span class="philosophy-icon">✿</span>
                <h4>Creativity</h4>
                <p>
                    Selalu ada ruang untuk mencoba
                    hal baru, bereksperimen, dan
                    mengembangkan ide.
                </p>
            </div>

            <div class="philosophy-card">
                <span class="philosophy-icon">♧</span>
                <h4>Uniqueness</h4>
                <p>
                    Setiap karya handmade memiliki
                    karakter dan keistimewaan
                    tersendiri.
                </p>
            </div>

        </div>
    </div>

    <!-- BEHIND EVERY STITCH -->
    <div class="profile-process">

        <div class="process-text">
            <p class="eyebrow">BEHIND EVERY STITCH</p>
            <h3>Little Details, Made with Care.</h3>
            <p>
                Dari memilih benang, menentukan warna,
                hingga merangkai setiap tusukan rajut,
                semuanya menjadi bagian dari proses
                kreatif yang menyenangkan.
            </p>
        </div>

        <div class="process-decoration">
            <span>🧶</span>
            <span>♡</span>
            <span>✿</span>
        </div>

    </div>

    <!-- CLOSING QUOTE -->
    <div class="profile-quote">
        <span>“</span>
        Every stitch holds a little piece of love.
        <span>”</span>
    </div>
</section>


        <!-- Bagian Product -->
         <section id="product">
            <h2>Our Products</h2>
    <p>Temukan berbagai koleksi rajutan handmade dari Nadé Crochet.</p>
    <div class="product-filter">
        <button class="filter active" data-filter="all">Semua</button>
        <button class="filter" data-filter="amigurumi">Amigurumi</button>
        <button class="filter" data-filter="keychain">Keychain</button>
        <button class="filter" data-filter="bouquet">Bouquet</button>
</div>

    <div class="product-list">
        <div class="product-card" data-category="amigurumi">
            <img src="img/amigurumi.jpeg" alt="Boneka Rajut">
            <h3>Amigurumi</h3>
            <p>Boneka rajut handmade dengan bentuk lucu dan unik.</p>
            <p>Rp85.000</p>
        </div>

        <!-- Product Amigurumi 2 -->
        <div class="product-card" data-category="amigurumi">
            <img src="img/doltie.jpeg" alt="Boneka rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="amigurumi">
            <img src="img/tortoise.jpeg" alt="Boneka rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="amigurumi">
            <img src="img/capy-frog.jpeg" alt="Boneka rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="amigurumi">
            <img src="img/rabbit-pink.jpeg" alt="Boneka rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="amigurumi">
            <img src="img/cake.jpeg" alt="Boneka rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="amigurumi">
            <img src="img/cupcake.jpeg" alt="Boneka rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="keychain">
            <img src="img/keychain.jpeg" alt="Gantungan Kunci Rajut">
            <h3>Crochet Keychain</h3>
            <p>Gantungan kunci rajut dengan berbagai pilihan bentuk.</p>
            <p>Rp25.000</p>
        </div>

        <div class="product-card" data-category="keychain">
            <img src="img/lemon-puzz.jpeg" alt="Gantungan Kunci Rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="keychain">
            <img src="img/pink bow.jpeg" alt="Gantungan Kunci Rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="keychain">
            <img src="img/cromboloni.jpeg" alt="Gantungan Kunci Rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="keychain">
            <img src="img/flower.jpeg" alt="Gantungan Kunci Rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        <div class="product-card" data-category="bouquet">
            <img src="img/buket-rajut-mini.jpeg" alt="Buket Bunga Rajut">
            <h3>Crochet Bouquet</h3>
            <p>Buket bunga rajut yang cocok untuk hadiah spesial.</p>
            <p>Rp75.000</p>
        </div>

        <div class="product-card" data-category="bouquet">
            <img src="img/princess-bouqet.jpeg" alt="Buket Bunga Rajut">
            <h3>Little Crochet Friends</h3>
            <p>Boneka rajut kecil yang menggemaskan.</p>
            <p>Rp45.000</p>
        </div>

        </div>
        </section>

        <!-- Bagian Registration -->
    <section id="registration">
        <h2>Registration</h2>
        <p>Silakan isi formulir untuk melakukan pemesanan atau bertanya tentang produk.</p>

    <form action="index.php#registration" method="POST">
    <label for="nama">Nama Lengkap</label>
    <input
        type="text"
        id="nama"
        name="nama"
        placeholder="Masukkan nama lengkap"
        required
        minlength="3"
    >

    <label for="email">Email</label>
    <input
        type="email"
        id="email"
        name="email"
        placeholder="contoh@email.com"
        required
    >

    <label for="telepon">Nomor Telepon</label>
    <input
        type="tel"
        id="telepon"
        name="telepon"
        placeholder="Masukkan nomor telepon"
        inputmode="numeric"
        pattern="[0-9]{10,15}"
        minlength="10"
        maxlength="15"
        title="Nomor telepon harus terdiri dari 10 sampai 15 angka."
        required
    >

    <label for="product">Pilihan Jenis Crochet</label>
    <select id="product" name="product" required>
        <option value="" selected disabled>-- Pilih jenis crochet --</option>
        <option value="Amigurumi">Amigurumi</option>
        <option value="Crochet Keychain">Crochet Keychain</option>
        <option value="Crochet Bouquet">Crochet Bouquet</option>
    </select>

    <label for="pesan">Pesan</label>
    <textarea
        id="pesan"
        name="pesan"
        placeholder="Tuliskan pesanan atau pertanyaan kamu..."
        required
        minlength="5"
    ></textarea>

    <button type="submit" name="submit_registration">
        Kirim Pendaftaran
    </button>
    </form>

    <!-- SOUND EFFECT KLIK -->
     <audio id="clickSound" preload="auto">
        <source src="audio/sound1.mp3" type="audio/mpeg">
    </audio>

    <!-- SOUND PENDAFTARAN BERHASIL -->
    <audio id="successSound" preload="auto">
    <source src="audio/sound2.mp3" type="audio/mpeg">
    </audio>

    <?php if ($pesanKonfirmasi !== ""): ?>
    <div class="notification-overlay" id="successNotification">
        <div class="notification-box">
            <div class="notification-icon">♡</div>
            <h2>Pendaftaran Berhasil!</h2>
            <p><?= $pesanKonfirmasi ?></p>
            <button type="button" id="closeNotification">
                Mengerti ♡
            </button>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($pesanGagal !== ""): ?>
    <p class="error-message">
        <?= htmlspecialchars($pesanGagal, ENT_QUOTES, "UTF-8") ?>
    </p>
    <?php endif; ?> 

    <?php if ($pesanGagal !== ""): ?>
    <p class="error-message">
        <?= htmlspecialchars($pesanGagal, ENT_QUOTES, "UTF-8") ?>
    </p>
    <?php endif; ?>

    <?php if (!empty($nama)): ?>
            <h3>Data yang Diterima Peladen</h3>

            <p>Nama:
                <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <p>Email:
                <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <p>Semester:
                <?= htmlspecialchars($semesterForm, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <p>Tanggal kunjungan: 
                <?= htmlspecialchars($tanggal, ENT_QUOTES, 'UTF-8') ?> 
            </p> 
 
            <p>Jenis pesan: 
                <?= htmlspecialchars($jenisPesan, ENT_QUOTES, 'UTF-8') ?> 
            </p> 
 
            <p>Program studi: 
                <?= htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8') ?> 
            </p>

            <p>Minat:</p> 
 
            <?php if (is_array($minat) && count($minat) > 0): ?> 
                <ul> 
                    <?php foreach ($minat as $topik): ?> 
                        <li> 
                            <?= htmlspecialchars((string) $topik, ENT_QUOTES, 'UTF-8') ?> 
                        </li> 
                    <?php endforeach; ?> 
                </ul> 
            <?php else: ?> 
                <p>Tidak ada minat yang dipilih.</p> 
            <?php endif; ?>

             <p>Pesan:</p>
             
             <p><?= nl2br(htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8')) ?></p> 
        <?php endif; ?> 

         </section>
         </main>
        <!-- Bagian Footer -->
        <footer>
            <p>
                &copy; <?= $tahun ?> 2622500007_Nadiyah Salma_SI1A_UTS Pemrograman Web Dasar
            </p>
        </footer>

    <button id="backToTop" title="Back to Top"
        aria-label="Kembali ke atas">
    ↑
    </button>
</main>
</div>
<script src="script.js"></script>
</body>
</html>