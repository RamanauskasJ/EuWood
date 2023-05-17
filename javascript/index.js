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
            title.innerHTML = 'Ieškote <span class="text-warning">Medinių Namukų</span> jūsų poilsiui?';
            description.innerHTML = 'Pasinaudokite proga pajusti vasaros šiluma mūsų jaukiuose ir stilinguose medininiuose nameliuose, puikiai tinkančių pailsėti savaitgaliui arba ilgesniam apsistojimui.';
            break;
        case 1:
            title.innerHTML = 'Atraskite geriausia <span class="text-warning">Medinį Namuką</span> jūsų teritorijai';
            description.innerHTML = 'Paverskite savo kiemą į ramybės oazę pasirinkdami vieną iš daugelio skirtingų stilių medinių namukų.';
            break;
        case 2:
            title.innerHTML = 'Atnaujinkite savo gyvenamają vietą su <span class="text-warning">Mediniais Namukais</span>';
            description.innerHTML = 'Ieškote kaip atnaujinti savo namus? Mūsų mediniai namukai yra puikus būdas greitai sukurti naują poilsio vietą.';
            break;
        case 3:
            title.innerHTML = 'Lengvai įrengiami <span class="text-warning">Mediniai Namukai</span>';
            description.innerHTML = 'Greitai pristatomi ir įrengiami mediniai Namukai yra puiki galimybė pridėti gyvenamosios erdvės jūsų namuose.';
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
    setInterval(changeBackgroundImage, 6000);
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
        input.placeholder = 'Prenumeruoti mūsų naujienlaiškiui';
    } else {
        input.placeholder = 'El Paštas';
    }
}

updatePlaceholder();
window.addEventListener('resize', updatePlaceholder);
