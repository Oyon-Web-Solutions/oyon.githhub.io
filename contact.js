$(function () {
    console.log("lmao neek");
    window.verifyRecaptchaCallback = function (response) {
        console.log("lmao neek");
        $('input[data-recaptcha]').val(response).trigger('change');
    }

    window.expiredRecaptchaCallback = function () {
        console.log("lmao neek");
        $('input[data-recaptcha]').val("").trigger('change');
    }

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        console.log("lmao neek");
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable">' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                        grecaptcha.reset();
                    }
                }
            });
            return false;
        }
    })
});