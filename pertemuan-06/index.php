<?php
// P6: PHP dasar dan pemrograman sisi peladen
// Bagian 1: Variabel dan konstanta
$nim = "2622500007";
$namaMahasiswa = "Nadiyah Salma";
$programStudi = "SI";
$tahunAkademik = "2026/2027";
$semester = 1;
$ipk = 4.00;
$statusAktif = true;
$catatanTambahan = null;
// Bagian 2: Operator
$batasSemester = 8;
$sisaSemester = $batasSemester - $semester;
$semesterValid = $semester >= 1 && $semester <= $batasSemester;
$statusSemester = ($semesterValid && $statusAktif) ? "Sesuai rentang" : "Perlu diperiksa";
const NAMA_MATA_KULIAH = "Pemrogramana Web Dasar";
const PROFIL_GITHUB = "2622500007-source"
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Struktur utama halaman P2 menggunakan elemen semantik HTML5 -->
    <header>
        <div class="header-top">
        <h1>Profil Mahasiswa</h1>

        <button
            class="nav-toggle"
            id="navToggle"
            type="button"
            aria-label="Buka navigasi"
            aria-controls="navMenu"
            aria-expanded="false">
        &#9776;
        </button>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Halo, saya Nadiyah Salma <strong><?php echo $namaMahasiswa; ?></strong>. Saya dengan mempelajari matakuliah 
            PWD <strong><?php print NAMA_MATA_KULIAH; ?></strong> pada tahun akademik <?php echo $tahunAkademik;
            ?>.</p>
            <!-- Gambar profil menggunakan folder img -->
            <img src="img/foto-mahasiswa.jpeg" alt="Foto Nadiyah Salma">
        </section>

        <section id="about">
            <h2>Tentang saya</h2>
            <article>
                <h3>Profil Singkat</h3>
                <p>Sisa semester hingga batas: <?php echo $sisaSemester; ?></p>
                <p>Pemeriksaan rentang semester: <?php echo $statusSemester; ?></p>
                <section id="about">
                    <h2>Tentang Saya</h2>
                </section>
                <p>Saya Mahasiswa Program Studi Sistem Informasi</p>

                <h3>Target Belajar</h3>
                <ol>
                    <li>Memahami Struktur HTML5.</li>
                    <li>Menyusun halaman Web Sematik</li>
                    <li>Memvalidasi Dokumen HTML</li>
                </ol>
            </article>
        </section>

        <section id="contact">
            <h2>Kontak</h2>
            <p>
                Kunjungi 
                <a target="_blank" href="https://github.com/2622500007-source/<?= PROFIL_GITHUB ?>">profil GitHub saya</a>.
            </p>


    <form action="index.html" method="get">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label><br>
            <input class="input-form" 
            type="text"
            id="nama" 
            name="Nama" 
            placeholder="Masukan nama lengkap"
            minlength="3"
            maxlength="50" 
            required>
        </div>

        <div class="form-group">
            <label for="email">Email</label><br>
            <input class="input-form"
            type="email"
            id="email"
            name="email"
            placeholder="nama@email.com"
            required>
        </div>

       <div class="form-group">
            <label for="semester">Semester</label><br>
            <input class="input-form"
            type="number"
            id="semester"
            name="semester"
            min="1"
            max="14"
            required>
        </div>
        
        <div class="form-group">
            <label for="tanggal">Tanggal Kunjungan</label><br>
            <input class="input-form"
            type="date"
            id="tanggal"
            name="tanggal"
            required>
        </div>

        <div class="form-group">
            <p>Jenis Pesan</p>
            <input type="radio" id="pertanyaan" name="jenis_pesan"
                value="pertanyaan" required>
            <label for="pertanyaan">Pertanyaan</label>
            <input type="radio" id="saran" name="jenis_pesan" 
                value="saran">
            <label for="saran">Saran</label>
        </div>
        
        <div class="form-group">
            <p>Topik yang Diminati</p>
            <input type="checkbox" id="minat-html" name="minat" value="HTML">
            <label for="minat-html">HTML</label>
            <input type="checkbox" id="minat-css" name="minat" value="CSS">
            <label for="minat-css">CSS</label>
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi</label><br>
            <select class="input-form" id="prodi" name="prodi" required>
                <option value="">-- Pilih Program Studi --</option>
                <option value="SI">Sistem Informasi</option>
                <option value="TI">Teknik Informatika</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pesan">Pesan</label><br>
            <textarea class="input-form"
            id="pesan"
            name="pesan"
            maxlength="300"
            placeholder="Tulis pesan Anda"
            required></textarea>
        </div>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
    </form>
     </section>
    </main>

    <footer>
        <p>&copy;2026 Nadiyah Salma [2622500007]</p>
    </footer>
    <script src=""script.js></script>
</body>
</html>