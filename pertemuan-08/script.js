// =========================
// NAVIGASI WEBSITE
// =========================

const sections = document.querySelectorAll("main section");
const menuLinks = document.querySelectorAll("nav a");
const heroButton = document.querySelector(".hero-button");

function showSection(targetId) {
    sections.forEach(section => {
        section.hidden = section.id !== targetId;
    });

    menuLinks.forEach(link => {
        link.classList.toggle(
            "active",
            link.getAttribute("href") === "#" + targetId
        );
    });

    history.replaceState(null, "", "#" + targetId);
}

// Navigasi sidebar
menuLinks.forEach(link => {

    link.addEventListener("click", function(event) {

        event.preventDefault();

        const targetId = this.getAttribute("href").substring(1);

        showSection(targetId);

    });

});

// Tombol Explore Collection
if (heroButton) {

    heroButton.addEventListener("click", function(event) {

        event.preventDefault();

        showSection("product");

    });

}

// Menentukan halaman pertama
const successMessage = document.querySelector(".success-message");

const initialSection = successMessage
    ? "registration"
    : (location.hash.replace("#", "") || "home");

const validSection = document.getElementById(initialSection)
    ? initialSection
    : "home";

showSection(validSection);


// =========================
// FILTER PRODUCT
// =========================

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

            const isMatch =
                category === "all" ||
                product.dataset.category === category;

            product.hidden = !isMatch;

        });

    });

});

// =========================
// BACKGROUND MUSIC
// =========================

const bgMusic = document.getElementById("bgMusic");
const musicToggle = document.getElementById("musicToggle");
const volumeControl = document.getElementById("volumeControl");
const musicStatus = document.getElementById("musicStatus");

// Mengatur volume awal
bgMusic.volume = 0.3;

// Tombol Play dan Pause
musicToggle.addEventListener("click", function() {

    if (bgMusic.paused) {

        bgMusic.play()
            .then(() => {
                musicToggle.textContent = "Ⅱ";
                musicStatus.textContent = "Now Playing ♫";
            })
            .catch(error => {
                musicStatus.textContent = "Music cannot be played";
            });

    } else {

        bgMusic.pause();

        musicToggle.textContent = "♫";
        musicStatus.textContent = "Music is off";

    }

});

// Mengatur volume musik
volumeControl.addEventListener("input", function() {

    bgMusic.volume = volumeControl.value;

});