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





(function ($) {
    // On Load 
    setActiveTab('.tabs li:nth-child(1)');
    showTabContent('.tabs_content', 'tabs li:nth-child(1)')

    // On Click
    $('.tabs').children().click(function () {
        if (!$(this).hasClass('active')) {
            setActiveTab($(this));
            showTabContent('.tabs_content', $(this));
        }
    })
}(jQuery));


function setActiveTab(e) {
    // Removing active class from siblings
    $(e).siblings().removeClass('active');
    // Adding active class to current selection
    $(e).addClass('active');

}

function hideTabContent(e) {
    // Hiding all tab content as a precaution
    $(e).children().slideUp();
}
function showTabContent(e, listItem) {
    hideTabContent(e);
    // Displaying content to the corresponding selection
    $(e).children().eq($(listItem).index()).slideDown();
}
// Initialize and add the map
function initMap() {
    // The location of Uluru
    var uluru = { lat: 43.890297, lng: -79.309044 };
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), { 
            zoom: 16, 
            center: uluru,
            styles: [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ebe3cd"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#523735"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#f5f1e6"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#c9b2a6"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#dcd2be"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#ae9e90"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#93817c"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#a5b076"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#447530"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f1e6"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#fdfcf8"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f8c967"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#e9bc62"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e98d58"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#db8555"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#806b63"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#8f7d77"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#ebe3cd"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#b9d3c2"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#92998d"
                        }
                    ]
                }
            ], 
        });
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({ position: uluru, map: map });
}
/* $(document).ready(function () {
    var apiKey = 'AIzaSyBV4geM6r23-Bs0AZfLUtqeD7Yoknhv9FQ';
    let placeId = 'ChIJ3YD4Vm3W1IkRqp2JWTzSdTE';
    var query = 'honest mechanic in markham';
    let textSearchEndpoint = 'textsearch/json?query=';
    var apiUrl = 'https://maps.googleapis.com/maps/api/place/';

    function init() {
        getData();
    }

    function getData() {
        var placesDetailsEndpoint = 'details/json?placeid=';

        $.ajax({
            type: 'GET',
            url: apiUrl + placesDetailsEndpoint + placeId + '&key=' + apiKey,
            dataType: "JSON",
            success: function (response) {
                renderReviews(response.result.reviews);
            },
            error: function (request, status, error) {
                alert(error);
            }
        });
    }

    function renderReviews(reviews) {
        reviews.map(function (review) {
            let reviewHeader = '<div><div class="col-md-12 text-center review-wrap">' + '<p class="review-rating">' + renderRating(review.rating) + '</p></div><hr>'

            let reviewBody = '<div class="col-md-12 review-body"><p>' + review.text + '</p></div>'
            let reviewFooter = '<div class="col-md-12 text-center review-info-wrap" > <p>' + review.author_name + '</p></div></div>'
            $('.review-content').append(reviewHeader + reviewBody + reviewFooter)
        })
    }

    init();
});
function renderRating(rating) {
    let stars = new Array();
    for (let i = 0; i < rating; i++) {
        stars.push('<i class="fa fa-star" aria-hidden="true"></i>');
    }

    return stars.join('');

}*/