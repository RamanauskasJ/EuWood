(new IntersectionObserver(function(e,o){
    if (e[0].intersectionRatio > 0){
        document.documentElement.removeAttribute('class');
    } else {
        document.documentElement.setAttribute('class','stuck');
    };
})).observe(document.querySelector('.trigger'));

let currentIndex = 1;
let images = ['assets/front-view-home-slider-winter.jpg', 'assets/front-view-real-life.jpg', 'assets/desktop-1920x1080.jpg', 'assets/desktop-1920x1080-real.jpg'];

function changeBackgroundImage() {
    let section = document.querySelector('.slideshow');
    section.style.backgroundImage = `linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5) ), url(${images[currentIndex]})`;
    currentIndex = (currentIndex + 1) % images.length;
}

function startSlideshow() {
    setInterval(changeBackgroundImage, 15000);
}

startSlideshow();



