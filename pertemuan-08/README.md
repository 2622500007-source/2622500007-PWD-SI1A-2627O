# Pertemuan 8 – UTS Pemrograman Web Dasar

## Website Nadé Crochet

Nadé Crochet merupakan website bisnis yang memperkenalkan produk kerajinan tangan berbahan benang rajut (*crochet*), seperti amigurumi, gantungan kunci, dan buket bunga rajut. Website ini dibuat dengan tampilan sederhana, menarik, serta menggunakan kombinasi warna pastel yang memberikan kesan hangat dan elegan.

## 1. Implementasi

Beberapa kegiatan yang dilakukan dalam pembuatan website Nadé Crochet:

- Membuat struktur halaman website menggunakan HTML.
- Membuat tampilan website menggunakan CSS dengan kombinasi warna cream, beige, sage, dan cokelat.
- Membuat navigasi antarbagian halaman menggunakan JavaScript.
- Membuat halaman Home yang berisi pengenalan dan deskripsi singkat bisnis.
- Membuat halaman Profile yang berisi informasi pemilik website.
- Membuat halaman Products untuk menampilkan berbagai produk crochet.
- Menambahkan fitur kategori untuk menyaring produk berdasarkan jenisnya.
- Membuat halaman Registration yang berisi formulir pemesanan atau pertanyaan produk.
- Menggunakan PHP untuk memproses data formulir yang dikirim menggunakan metode POST.
- Menampilkan pesan konfirmasi setelah formulir berhasil dikirim.
- Menambahkan footer yang berisi informasi hak cipta website.

## 2. Fitur Website

Website Nadé Crochet memiliki beberapa fitur, yaitu:

- **Home:** Menampilkan pengenalan bisnis dan gambaran produk Nadé Crochet.
- **Profile:** Menampilkan informasi mengenai pemilik dan latar belakang bisnis.
- **Products:** Menampilkan koleksi produk amigurumi, crochet keychain, dan crochet bouquet.
- **Product Filter:** Memudahkan pengguna melihat produk berdasarkan kategori yang dipilih.
- **Registration:** Menyediakan formulir untuk mengisi nama, email, nomor telepon, produk yang diminati, dan pesan.
- **Confirmation Message:** Menampilkan pesan konfirmasi setelah formulir berhasil dikirim.
- **Navigation:** Memudahkan pengguna berpindah dari satu bagian website ke bagian lainnya.

## 3. Teknologi yang Digunakan

- HTML: Membuat struktur halaman website.
- CSS: Mengatur desain, warna, tata letak, dan tampilan website.
- JavaScript: Mengatur navigasi dan fitur penyaringan produk.
- PHP: Memproses data formulir dan menampilkan pesan konfirmasi.

## 4. Pengujian

Pengujian dilakukan menggunakan browser melalui localhost dengan bantuan Laragon.

Beberapa bagian yang diuji meliputi:
- Tampilan halaman Home, Profile, Products, dan Registration.
- Fungsi navigasi antarbagian website.
- Fungsi filter kategori produk.
- Pengiriman formulir menggunakan metode POST.
- Kemunculan pesan konfirmasi setelah formulir dikirim.

## 5. Kendala dan Penyelesaian

Selama proses pembuatan website, terdapat beberapa kendala yang ditemukan, antara lain:

- **Navigasi tombol Explore Collection:** Tombol belum dapat mengarahkan pengguna ke bagian Products karena belum termasuk dalam pemilihan elemen navigasi pada JavaScript. Kendala diselesaikan dengan menambahkan selector `.hero-button`.
- **Filter produk:** Perlu menyesuaikan kategori pada tombol filter dengan atribut `data-category` pada setiap produk agar penyaringan dapat berjalan sesuai kategori.
- **Pemrosesan formulir PHP:** Sempat terjadi kesalahan halaman saat formulir dikirim karena masih terdapat alamat tujuan `proses.php` pada file HTML. Kendala diselesaikan dengan menyesuaikan alamat formulir menjadi `index.php#registration`.
- **Pengujian PHP:** Website perlu dijalankan melalui localhost menggunakan Laragon agar kode PHP dapat diproses dengan benar.

## 6. Pengembangan

Website Nadé Crochet dikembangkan dengan memperhatikan kemudahan navigasi, tampilan yang konsisten, dan fungsi interaktif. Pengembangan dilakukan secara bertahap mulai dari pembuatan struktur HTML, pengaturan desain CSS, penambahan JavaScript, hingga penerapan PHP pada formulir pendaftaran.

Repository Github: [https://github.com/2622500007-source/2622500007-PWD-SI1A-2627O]