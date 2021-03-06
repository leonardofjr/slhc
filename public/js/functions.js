$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 500,
        height: 500,
        type: 'square'
    },
    boundary: {
        width: 600,
        height: 600
    }
});


$('#service_image_file').on('change', function() {
    // Capturing file
    var reader = new FileReader();

    reader.onload = function(event) {
        $uploadCrop.croppie('bind', {
            url: event.target.result
        }).then(function() {
            console.log('Jquery bind complete')
        })
    }
    reader.readAsDataURL(this.files[0]);

    // Display Modal
    $('#uploadImageModal').modal('show');
    $('.service_image_preview').show();


    // Crop & Upload Image

    $('.crop-upload-image').on('click', function(event) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport',
        }).then(function(response) {
            $.ajax({
                url: '/services/upload_image',
                type: 'POST',
                data: {
                    "image" : response,
                    "id" : $(this).attr('data-id'),
                    "_token" : $('input[name="_token"').val()
                },
                success: function (data) { 
                    $('#uploadImageModal').modal('hide');
                    console.log(data);
                    $('.service_image_preview').attr('src', data.image_destination);
                    console.log('success');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                }
            });
        })
    });
});

$('#service_form_create #uploadImageModal .close').on('click', function() {
    $('#service_image_file').val('');
    $('.service_image_preview').attr('src', '')
    $('.service_image_preview').hide();
})

$('#service_form_edit #uploadImageModal .close').on('click', function() {
    $('#service_image_file').val('');
    $('.service_image_preview').attr('src', $('.service_image_preview').attr('src'))
})