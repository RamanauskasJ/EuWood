$(document).ready(function () {
    var isFormSubmitting = false;

    $('#emailForm').submit(function (event) {
        event.preventDefault();

        if (isFormSubmitting) {
            return;
        }

        isFormSubmitting = true;

        var $submitButton = $('#submitButton');
        $submitButton.prop('disabled', true);

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'common/submit_email_form.php',
            data: formData,
            success: function (response) {
                snackbarFunction("Žinutė išsiūsta sėkmingai!");
            },
            error: function (xhr, status, error) {
                snackbarFunction("Klaida siunčiant Žinutė!");
            },
            complete: function () {
                setTimeout(function () {
                    $submitButton.prop('disabled', false);
                    isFormSubmitting = false;
                }, 6000);
            }
        });
    });

    /***
     * validation for the userName, userEmail and userMessage
     */
    $('#userName').on('input', function () {
        var nameValue = this.value;
        var pattern = /^[A-Za-z\s-]+$/;

        this.setCustomValidity(pattern.test(nameValue) ? '' : 'Please enter a valid name (only alphabetic characters, spaces, and hyphens are allowed)');
    });

    $('#userEmail').on('input', function () {
        var emailValue = this.value;
        var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        this.setCustomValidity(pattern.test(emailValue) ? '' : 'Please enter a valid email address');
    });

    $('#userMessage').on('input', function () {
        var messageValue = this.value;
        var maxLength = 400; // Maximum allowed characters

        this.setCustomValidity(messageValue.length <= maxLength ? '' : 'Please enter a message with a maximum of ' + maxLength + ' characters');
    });
});


/***
 * initializing leaflet library map object with coords
 */
var map = L.map('map').setView([55.703297, 21.144279], 13);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);