$(document).ready(function () {

    $('.contact-form').submit(function () {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            dataType: 'json',
            data: $(this).serialize(),
   
            success: function (data, status) {
                if (status === 'success') {
                    $('.contact-form').addClass('d-none');
                    $('.flash-message-success').removeClass('d-none');
                }
            },
            error: function (xhr, status, err) {
                response = xhr.responseJSON;
                if (xhr.status === 422) {
                    if (response.name) {
                        $('.flash-message-name span').html(response.name[0]);
                        $('.flash-message-name').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-name').addClass('d-none');
                    }
                    if (response.email) {
                        $('.flash-message-email span').html(response.email[0]);
                        $('.flash-message-email').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-email').addClass('d-none');
                    }
                    if (response.inquiry) {
                        $('.flash-message-inquiry span').html(response.inquiry[0]);
                        $('.flash-message-inquiry').removeClass('d-none');
                    }
                    else {
                        $('.flash-message-inquiry').addClass('d-none');
                    }


                    if (grecaptcha.getResponse().length < 1 ) {
                        $('.flash-message-recaptcha-token span').html('Please check reCAPTCHA.');
                        $('.flash-message-recaptcha-token').removeClass('d-none');
                    }
                    
                    else {
                        $('.flash-message-recaptcha-token').addClass('d-none');
                    }
                }
            }
        });

        return false;
    });


    $('.book-now-form').submit(function () {
        // Getting form data from selected form
        // $(this) contains the selected form

        var formData = new FormData($(this)[0]);
        // Starting Ajax request
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            // Expecting JSON to be returned
            dataType: 'json',
            processData: false,
            contentType: false,
            // Attaching Cross Site Request Forgery Token value into header
            headers: {
                'X-CSRF-Token': $('[name="_token"]').val()
            },
            // Attaching form data
            data: formData,

            success: function (data, status) {
                // 
                if (status === 'success') {
                    $('.book-now-form').addClass('d-none');
                    $('.flash-message-success').removeClass('d-none');
                    
                }
            },
            error: function (xhr, status, err) {
                response = xhr.responseJSON;

                if (response.name) {
                    $('.flash-message-name span').html(response.name[0]);
                    $('.flash-message-name').removeClass('d-none');
                }
                else {
                    $('.flash-message-name').addClass('d-none');
                }

                if (response.phone) {
                    $('.flash-message-phone span').html(response.phone[0]);
                    $('.flash-message-phone').removeClass('d-none');
                }
                else {
                    $('.flash-message-phone').addClass('d-none');
                }


                if (response.email) {
                    $('.flash-message-email span').html(response.email[0]);
                    $('.flash-message-email').removeClass('d-none');
                }
                else {
                    $('.flash-message-email').addClass('d-none');
                }


                if (response.interests) {
                    $('.flash-message-interests span').html(response.interests[0]);
                    $('.flash-message-interests').removeClass('d-none');
                }
                else {
                    $('.flash-message-interests').addClass('d-none');
                }

                if (response.date) {
                    $('.flash-message-date span').html(response.date[0]);
                    $('.flash-message-date').removeClass('d-none');
                }
                else {
                    $('.flash-message-date').addClass('d-none');
                }

                

                if (grecaptcha.getResponse().length < 1) {
                    $('.flash-message-recaptcha-token span').html('Please check reCAPTCHA.');
                    $('.flash-message-recaptcha-token').removeClass('d-none');
                }

                else {
                    $('.flash-message-recaptcha-token').addClass('d-none');
                }
            }

        });
        return false;
    });
});




