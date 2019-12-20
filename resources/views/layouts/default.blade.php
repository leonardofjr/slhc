<!DOCTYPE html><?php $url = URL::to("/");?>
<html>
    <head>
        <title>@yield('title') </title>
        <meta name="description" content="@yield('meta-description-content')"/>
        @include('layouts.partials.head')
    </head>
    <body>
        <header>
                @include('frontend.components.navigation')
                @include('frontend.components.slideshow')
                <div class="container-fluid primary-bg-color">
                    <div class="container">
                        <div class="row py-3">
                            <div class="col-md-9">
                                <h2 class="text-uppercase">HOW CAN WE HELP?</h2>
                                <p>For thousands of years our ancestors worked with various types of healing modalities in order to achieve balance whether it’s was through balancing chakras or Qi ‘ a universal energy that circulates through our body and the universe, which Is still commonly practiced among many cultures today. According to ancient theories of Chinese medicine the flow of qi must always flow freely to maintain a healthy life harmoniously to help achieve longevity. Therefore it is important to take the time to help yourself maintain a balanced lifestyle. </p>
                            </div>
                            <div class="col-md-3 d-flex align-items-center justify-content-center m-5 m-md-0">
                                <button class="btn btn-secondary">BOOK NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" style="background-color: rgba(241, 101, 34, .2);">
                    <div class="container">
                        <h2 class="text-uppercase mt-0 pt-5 text-center">GENTLE, EFFECTIVE RESULTS.</h2>
                        <div class="row py-3">
                                <div class="col-md-4">
                                    <img class="img-fluid" src='{{asset("imgs/back-pain.png")}}' alt="sdad">
                                </div>
                                <div class="col-md-4">
                                        <ul>
                                            <li>Free Consultation</li>
                                            <li>Trusted, Respectful, Confidential care.</li>
                                            <li>Multiple services available to get you feeling better faster.</li>
                                            <li>Relief for not only painful muscle, joint and nerve conditions, injuries and stress, but also for treatment of sinus congestion, allergies, colds, flu’s, digestive issues, infertility and many other health concerns.</li>
                                        </ul>
                                </div>
                                <div class="col-md-4">
                                        <ul>
                                            <li>Professional, Knowledgeable, Experienced therapists in many different types of conditions and injuries.</li>
                                            <li>Friendly, Peaceful, Clean environment.</li>
                                            <li>Appointments available:<br> Monday to Sunday</li>
                                            <li>Competitive fees.</li>
                                        </ul>
                                </div>
                            </div>
                    </div>
                </div>
        </header>
        <main>
            @if (!\Request::is('/'))
                <div class="page-title primary-bg-color">
                    <h2 class="text-center m-0 p-0">{{\Request::route()->getName()}}</h2>
               </div>
            @endif

                 @yield('content')
        </main>
      
        <footer>
                @include('frontend.components.footer')
        </footer>
    </body>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
     <script async defer
src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&callback=initMap">
    </script>

</html>