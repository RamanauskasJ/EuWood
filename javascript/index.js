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

function updateText() {
    const title = document.querySelector('#newsletter h3');
    const description = document.querySelector('#newsletter p.lead');
    switch(currentIndex) {
        case 0:
            title.innerHTML = 'Looking for <span class="text-warning">Wood Cabins</span> in Europe for your next getaway?';
            description.innerHTML = 'Escape to the serene beauty of the countryside in one of our cozy and stylish wood cabins, perfect for a weekend retreat or a longer stay.';
            break;
        case 1:
            title.innerHTML = 'Discover the perfect <span class="text-warning">Wood Cabin</span> for your backyard';
            description.innerHTML = 'Transform your backyard into a peaceful oasis with our range of customizable wood cabins, designed to fit your unique style and needs.';
            break;
        case 2:
            title.innerHTML = 'Upgrade your living space with a <span class="text-warning">Wood Cabin</span>';
            description.innerHTML = 'Looking for a way to add more space and character to your home? Our wood cabins are the perfect solution, providing a cozy and functional living area.';
            break;
        case 3:
            title.innerHTML = 'Experience the ultimate relaxation in a <span class="text-warning">Wood Cabin</span>';
            description.innerHTML = 'Indulge in a luxury escape in one of our premium wood cabins, featuring top-of-the-line amenities and breathtaking views.';
            break;
    }
}

function changeBackgroundImage() {
    const section = document.querySelector('.slideshow');
    section.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3)), url(${images[currentIndex]})`;
    currentIndex = (currentIndex + 1) % images.length;
    updateText(currentIndex);
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
