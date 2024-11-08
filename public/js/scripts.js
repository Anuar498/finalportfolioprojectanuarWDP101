document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    let index = 0;

    function updateCarousel() {
        const slideWidth = carousel.querySelector("img").offsetWidth + 16; // width + gap
        carousel.style.transform = `translateX(${-index * slideWidth}px)`;
    }

    function showNextImage() {
        index++;
        if (index >= carousel.children.length) {
            // Smooth transition back to first slide
            index = 0;
        }
        updateCarousel();
    }

    // Handle window resize
    window.addEventListener("resize", updateCarousel);

    // Start the carousel
    setInterval(showNextImage, 3000);
});
