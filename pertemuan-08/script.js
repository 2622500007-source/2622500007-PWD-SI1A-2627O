
// Mengambil semua menu navigasi
const menuLinks = document.querySelectorAll(
    "nav a, .hero-button"
);

// Mengambil semua bagian konten
const sections = document.querySelectorAll("main section");

// Menampilkan halaman Home saat website dibuka
sections.forEach(section => {
    section.hidden = true;
});

document.querySelector("#home").hidden = false;

// Memberikan fungsi pada setiap menu
menuLinks.forEach(link => {

    link.addEventListener("click", function(event) {

        // Mencegah halaman berpindah secara default
        event.preventDefault();

        // Mengambil ID tujuan menu
        const targetId = this.getAttribute("href");

        // Menyembunyikan semua bagian
        sections.forEach(section => {
            section.hidden = true;
        });

        // Menampilkan bagian yang dipilih
        document.querySelector(targetId).hidden = false;

        // Menghilangkan status aktif dari semua menu
        menuLinks.forEach(item => {
            item.classList.remove("active");
        });

        // Memberikan status aktif pada menu yang dipilih
        this.classList.add("active");

    });

});


// FITUR FILTER PRODUK

const filterButtons = document.querySelectorAll(".filter");
const productCards = document.querySelectorAll(".product-card");

filterButtons.forEach(button => {

    button.addEventListener("click", function() {

        const category = this.dataset.filter;

        filterButtons.forEach(item => {
            item.classList.remove("active");
        });

        this.classList.add("active");

        productCards.forEach(product => {

            if (
                category === "all" ||
                product.dataset.category === category
            ) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }

        });

    });

});
