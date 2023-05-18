var nameInput = document.getElementById('exampleInputName1');

nameInput.addEventListener('input', function() {
    var nameValue = this.value;
    var pattern = /^[A-Za-z\s-]+$/;

    if (!pattern.test(nameValue)) {
        this.setCustomValidity('Please enter a valid name (only alphabetic characters, spaces, and hyphens are allowed)');
    } else {
        this.setCustomValidity('');
    }
});