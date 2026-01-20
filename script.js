const thumbnails = document.querySelectorAll(".thumbnail");
const overlay = document.getElementById("overlay");
const overlayImg = document.getElementById("overlay-img");
const closeBtn = document.querySelector(".close");

thumbnails.forEach(img => {
    img.addEventListener("click", () => {
        overlay.style.display = "flex";
        overlayImg.src = img.src;
    });
});

closeBtn.addEventListener("click", () => {
    overlay.style.display = "none";
});

overlay.addEventListener("click", (e) => {
    if (e.target === overlay) {
        overlay.style.display = "none";
    }
});