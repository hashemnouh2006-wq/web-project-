let slideIndex = 0;
const slides = document.querySelectorAll(".slide");

function changeSlide(n) {
    // Hide current slide
    slides[slideIndex].classList.remove("active");
    
    //  (loops back to start/end)
    slideIndex = (slideIndex + n + slides.length) % slides.length;
    
    // Show new slide
    slides[slideIndex].classList.add("active");
}