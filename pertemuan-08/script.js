// =========================
// BUTTON SOUND EFFECT
// =========================

const clickSound = document.getElementById("clickSound");

function playClickSound() {

    if (!clickSound) {
        console.log("clickSound tidak ditemukan!");
        return;
    }

    clickSound.pause();
    clickSound.currentTime = 0;
    clickSound.volume = 0.2;

    clickSound.play().catch(error => {
        console.log("Sound 1 error:", error);
    });

}

document.addEventListener("click", function(event) {

    const clickable = event.target.closest(
        "button, a, input, select, textarea, [role='button']"
    );

    if (!clickable || clickable.disabled) return;

    playClickSound();

}, true);

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

// Navigasi Logo kembali ke Home
const brandLogo = document.querySelector(".brand-logo");

brandLogo.addEventListener("click", function(event) {
    event.preventDefault();
    showSection("home");
});

// Tombol Explore Collection
if (heroButton) {

    heroButton.addEventListener("click", function(event) {

        event.preventDefault();

        showSection("product");

    });

}

// Menentukan halaman pertama
const initialSection = document.getElementById("successNotification")
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
const musicToggle = document.getElementById("playPause");
const volumeControl = document.getElementById("volumeControl");
const musicStatus = document.getElementById("musicStatus");

const prevSongButton = document.getElementById("prevSong");
const nextSongButton = document.getElementById("nextSong");

// Daftar 7 lagu
const playlist = [
    "audio/song1.mp3",
    "audio/song2.mp3",
    "audio/song3.mp3",
    "audio/song4.mp3",
    "audio/song5.mp3",
    "audio/song6.mp3",
    "audio/song7.mp3"
];

let currentSong = 0;

// Volume awal
bgMusic.volume = 0.3;

// Memutar lagu
function playCurrentSong() {
    bgMusic.src = playlist[currentSong];
    bgMusic.load();

    bgMusic.play()
        .then(() => {
            musicToggle.textContent = "❚❚";
            musicToggle.title = "Pause Music";
            musicToggle.setAttribute("aria-label", "Pause Music");

            musicStatus.textContent =
                "Now Playing • Song " + (currentSong + 1);
        })
        .catch(error => {
            musicStatus.textContent = "Music cannot be played";
        });
}

// Tombol Play dan Pause
musicToggle.addEventListener("click", function() {

    if (bgMusic.paused) {
        playCurrentSong();
    } else {
        bgMusic.pause();

        musicToggle.textContent = "▶";
        musicToggle.title = "Play Music";
        musicToggle.setAttribute("aria-label", "Play Music");

        musicStatus.textContent = "Music is off";
    }

});

// Tombol Next
function nextSong() {
    currentSong++;

    if (currentSong >= playlist.length) {
        currentSong = 0;
    }

    playCurrentSong();
}

nextSongButton.addEventListener("click", nextSong);

// Tombol Previous
prevSongButton.addEventListener("click", function() {

    currentSong--;

    if (currentSong < 0) {
        currentSong = playlist.length - 1;
    }

    playCurrentSong();

});

// Otomatis lanjut ke lagu berikutnya
bgMusic.addEventListener("ended", nextSong);

// Mengatur volume
volumeControl.addEventListener("input", function() {
    bgMusic.volume = Number(volumeControl.value);
});

// =========================
// OPEN & CLOSE MUSIC PLAYER
// =========================

const playerLauncher = document.getElementById("playerLauncher");
const playerPanel = document.getElementById("playerPanel");

playerLauncher.addEventListener("click", function() {

    playerPanel.hidden = !playerPanel.hidden;

    playerLauncher.setAttribute(
        "aria-expanded",
        !playerPanel.hidden
    );

});

/* =========================
   BACK TO TOP FUNCTION
========================= */

const backToTop = document.getElementById("backToTop");

// Tombol muncul saat halaman di-scroll
window.addEventListener("scroll", function() {

    if (window.scrollY > 300) {
        backToTop.classList.add("show");
    } else {
        backToTop.classList.remove("show");
    }

});

// Kembali ke bagian paling atas
backToTop.addEventListener("click", function() {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});
/* =========================
   WELCOME OVERLAY
========================= */

const welcomeOverlay = document.getElementById("welcomeOverlay");
const enterWebsite = document.getElementById("enterWebsite");

// Periksa apakah pengunjung sudah membuka website
if (sessionStorage.getItem("nadeVisited") === "yes") {
    welcomeOverlay.classList.add("hide");
}

// Tombol masuk website
enterWebsite.addEventListener("click", function() {

    welcomeOverlay.classList.add("hide");

    sessionStorage.setItem("nadeVisited", "yes");

});
// =========================
// SUCCESS NOTIFICATION
// =========================

const successNotification = document.getElementById("successNotification");
const closeNotification = document.getElementById("closeNotification");
const successSound = document.getElementById("successSound");

if (successNotification && closeNotification) {

    // Sound saat pendaftaran berhasil
    if (successSound) {
        successSound.volume = 0.5;
        successSound.play().catch(() => {});
    }

    // Tombol Mengerti
    closeNotification.addEventListener("click", function() {

        successNotification.classList.add("hide");

        setTimeout(() => {
            successNotification.remove();
        }, 500);

    });

}