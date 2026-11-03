<?php
$tahun = date("Y");
$namaWebsite = "Nadé Crochet";
$pesanKonfirmasi = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = htmlspecialchars(
        $_POST["nama"] ?? "",
        ENT_QUOTES,
        "UTF-8"
    );

    $email = htmlspecialchars(
        $_POST["email"] ?? "",       ENT_QUOTES,
        "UTF-8"
    );

    $telepon = htmlspecialchars(
        $_POST["telepon"] ?? "",
        ENT_QUOTES,
        "UTF-8"
    );

    $product = htmlspecialchars(
        $_POST["product"] ?? "",
        ENT_QUOTES,
        "UTF-8"
    );

    $pesan = htmlspecialchars(
        $_POST["pesan"] ?? "",
        ENT_QUOTES,
        "UTF-8"
    );

    $pesanKonfirmasi = "Terima kasih, " . $nama .
                       "! Pendaftaran kamu berhasil.";
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
    <div class="container">
    <aside class="sidebar">
        <div class="brand">
            <img src="img/Nadé Crochet Yarn.png" alt="Logo Nadé Crochet">
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

        <audio id="clickSound" preload="auto">
            <source src="audio/sound1.mp3" type="audio/mpeg">
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
        <p class="eyebrow">A LITTLE WORLD OF CROCHET.</p>
                    
        <h1>Little things,<br>
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
             </div>
        </div>

    <div class="highlight">
        <div>
            <h3>♡ Handmade with Love</h3>
            <p>Setiap karya dibuat dengan sepenuh hati.</p>
        </div>

        <div>
            <h3>✿ Unique Creation</h3>
            <p>Memiliki sentuhan kreatif dan personal.</p>
        </div>

        <div>
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
        <p>Little stories, handmade with love.</p>
    </div>

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
                Selamat datang di dunia kecil Nadé Crochet!
                Saya percaya bahwa setiap rajutan memiliki
                cerita dan kehangatannya sendiri.
            </p>

            <p>
                Nadé Crochet merupakan usaha kerajinan tangan
                yang berfokus pada produk rajutan handmade.
                Berawal dari kecintaan terhadap seni merajut
                dan kreativitas, setiap karya dibuat dengan
                penuh ketelitian, kesabaran, dan kasih sayang.
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
                Made with love, stitch by stitch. ♡
            </p>
        </div>
        </div>
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
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="telepon">Nomor Telepon</label>
        <input type="text" id="telepon" name="telepon" required>

        <label for="product">Product yang Diminati</label>
        <select id="product" name="product">
            <option value="Amigurumi">Amigurumi</option>
            <option value="Crochet Keychain">Crochet Keychain</option>
            <option value="Crochet Bouquet">Crochet Bouquet</option>
        </select>

        <label for="pesan">Pesan</label>
        <textarea id="pesan" name="pesan"></textarea>
        <button type="submit">Kirim Pendaftaran</button>
    </form>
        <?php if ($pesanKonfirmasi != ""): ?>
            <p class="success-message">
        <?= $pesanKonfirmasi ?></p>
        <?php endif; ?>
         </section>   
        <!-- Bagian Footer -->
        <footer>
            <p>
                &copy; <?= $tahun ?> 2622500007_Nadiyah Salma_SI1A_UTS Pemrograman Web Dasar
            </p>
        </footer>
</main>
</div>
<script src="script.js"></script>
</body>
</html>