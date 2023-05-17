// Intersection observer to toggle class 'stuck' on html element on user scroll
const observer = new IntersectionObserver((entries, observer) => {
    if (entries[0].intersectionRatio > 0) {
        document.documentElement.removeAttribute('class');
    } else {
        document.documentElement.setAttribute('class', 'stuck');
    }
});

observer.observe(document.querySelector('.trigger'));
