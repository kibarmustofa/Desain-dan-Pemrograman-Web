$(document).ready(function () {
    const slideTrack = document.querySelector('.slide-track');
const slides = document.querySelectorAll('.slide');
const slideWidth = 350 + 40; 
let currentIndex = 1; 
const totalSlides = slides.length;

function startSlideshow() {
    setInterval(() => {
        currentIndex++;

        if (currentIndex === totalSlides - 1) {
            
            slideTrack.style.transition = 'none';
            currentIndex = 1;
            slideTrack.style.transform = `translateX(${-slideWidth * currentIndex}px)`;

           
            setTimeout(() => {
                slideTrack.style.transition = 'transform 1s linear';
            }, 20);
        } else {
            
            slideTrack.style.transition = 'transform 1s linear';
            slideTrack.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
        }
    }, 3000); 
}

startSlideshow();
});
