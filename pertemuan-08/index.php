<?php
// P8: PHP pada website Nadé Crochet

$tahun = date("Y");
$namaWebsite = "Nadé Crochet";

$pesanKonfirmasi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $telepon = htmlspecialchars($_POST["telepon"]);
    $produk = htmlspecialchars($_POST["produk"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

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
                <li><a href="#produk">Produk</a></li>
                <li><a href="#registration">Registration</a></li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">

        <!-- Bagian Home -->
         <section id="home" class="home-section">
        <div class="hero">
        <div class="hero-text">
        <p class="eyebrow">A LITTLE WORLD OF CROCHET</p>
                    
        <h1>Little things,<br>
            <span>made with love.</span>
        </h1>

        <p>
            Selamat datang di dunia kecil Nadé Crochet.
            Temukan berbagai karya rajutan handmade
            yang dibuat dengan teliti, kreatif,
            dan penuh kehangatan.
        </p>

        <a href="#produk" class="hero-button">
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
        <section id="profile">
            <h2>About Nadé Crochet</h2>
            <img src="img/owner-profil.jpeg" alt="Foto Pemilik">
            <p>
                Nadé Crochet merupakan usaha kerajinan tangan
                yang berfokus pada produk rajutan handmade.
                Usaha ini dibuat berdasarkan kecintaan terhadap
                seni merajut dan kreativitas.
            </p>
            <h3>Profile</h3>
            <p>Nama: Nadiyah Salma</p>
            <p>Program Studi: Sistem Informasi</p>
        </section>

        <!-- Bagian Produk -->
         <section id="produk">
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

        <!-- Produk Amigurumi 2 -->
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

        <label for="produk">Produk yang Diminati</label>
        <select id="produk" name="produk">
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