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

    // Crop & Upload Image

    $('.crop-upload-image').on('click', function(event) {
        console.log(event);
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport',
        }).then(function(response) {
            console.log(response);
            $.ajax({
                url: 'services',
                type: 'POST',
                data: {
                    "image" : response,
                    "_token" : $('input[name="_token"').val()
                },
                success: function (data) { 
                    $('#uploadImageModal').modal('hide');
                    console.log('success');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                }
            });
        })
    });
});