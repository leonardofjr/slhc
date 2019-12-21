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

});