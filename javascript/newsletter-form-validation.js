$(document).ready(function () {
    var isFormSubmitting = false;

    $('#newsletterForm').submit(function (event) {
        event.preventDefault();

        if (isFormSubmitting) {
            return;
        }

        isFormSubmitting = true;

        var $submitButton = $('#submitNewsletter');
        $submitButton.prop('disabled', true);

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'common/subscribe.php',
            data: formData,
            success: function (response) {
                snackbarFunction("Prenumeracija Sėkminga!");
            },
            error: function (xhr, status, error) {
                snackbarFunction("Įvyko klaida");
            },
            complete: function () {
                setTimeout(function () {
                    $submitButton.prop('disabled', false);
                    isFormSubmitting = false;
                }, 6000);
            }
        });
    });

    $('#userNewsletterEmail').on('input', function () {
        var emailValue = this.value;
        var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        this.setCustomValidity(pattern.test(emailValue) ? '' : 'Please enter a valid email address');
    });
});