/** Helper functions **/
let timeoutId; // Declare the timeoutId variable outside the snackbarFunction

// JavaScript for the gtranslate
window.gtranslateSettings = {"default_language":"lt","detect_browser_language":true,"languages":["lt","en"],"wrapper_selector":".gtranslate_wrapper"}

// Intersection observer to toggle class 'stuck' on html element on user scroll
const observer = new IntersectionObserver((entries, observer) => {
    if (entries[0].intersectionRatio > 0) {
        document.documentElement.removeAttribute('class');
    } else {
        document.documentElement.setAttribute('class', 'stuck');
    }
});

observer.observe(document.querySelector('.trigger'));

// JavaScript for the Snackbar
// Call the snackbarFunction(message) function with a string argument to set the message of the Snackbar.
// snackbarFunction("This is the snackbar message");
function snackbarFunction(message) {
    var x = document.getElementById("snackbar");
    x.innerHTML = message;
    clearTimeout(timeoutId);
    x.className = "show";
    timeoutId = setTimeout(function() {
        x.className = x.className.replace("show", "");
    }, 5950); // Adjust the timeout duration as per your requirements
}