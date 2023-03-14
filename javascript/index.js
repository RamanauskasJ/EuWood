// Intersection observer to toggle class 'stuck' on html element on user scroll
const observer = new IntersectionObserver((entries, observer) => {
    if (entries[0].intersectionRatio > 0) {
        document.documentElement.removeAttribute('class');
    } else {
        document.documentElement.setAttribute('class', 'stuck');
    }
});

observer.observe(document.querySelector('.trigger'));

// Slideshow homepage
let currentIndex = 1;
const images = ['assets/slideshow-picture-01.jpg', 'assets/slideshow-picture-02.jpg', 'assets/slideshow-picture-03.jpg', 'assets/slideshow-picture-04.jpg'];

function changeBackgroundImage() {
    const section = document.querySelector('.slideshow');
    section.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5)), url(${images[currentIndex]})`;
    currentIndex = (currentIndex + 1) % images.length;
}

function startSlideshow() {
    setInterval(changeBackgroundImage, 10000);
}

startSlideshow();

// Show/hide section for the newsletter
const section = document.querySelector('.hide-section');
const button = document.querySelector('#pin-button');

button.addEventListener('click', () => {
    section.classList.toggle('show-section');
});

// Update input field placeholder text for the newsletter
const input = document.querySelector('input[type="text"]');

function updatePlaceholder() {
    if (window.innerWidth < 768) {
        input.placeholder = 'Enter your email to subscribe for newsletter';
    } else {
        input.placeholder = 'Enter Email';
    }
}

updatePlaceholder();
window.addEventListener('resize', updatePlaceholder);
