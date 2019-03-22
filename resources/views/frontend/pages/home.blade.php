@extends('layouts.default')
@section('title', 'Sacred Light Healing Centre')
@section('content')


<div class="container row-1">
        <div class="row">
            <div class="col-12 col-md-6 column-1">
                    <span class="img-wrap">
                        <img src="assets/miguel-felipa.jpg" alt="">
                    </span>
          
             </div>

            <div class="col-12 col-md-6 column-2">
                    <div class="card card-shadow">
                        <div class="inner-text">
                            <h2>Our practice revolves around the ancient healing arts of traditional healing</h2>
                            <p>For thousands of years our ancestors worked with various types of healing modalities in order to achieve balance whether it’s was through balancing chakras or Qi ‘ a universal energy that circulates through our body and the universe, which Is still commonly practiced among many cultures today. According to ancient theories of Chinese medicine the flow of qi must always flow freely to maintain a healthy life harmoniously to help achieve longevity. Therefore it is important to take the time to help yourself maintain a balanced lifestyle. </p><p><strong>Call us today we’ve love to help!</strong></p>
                            <div class="btn-container text-right">
                                <a href="/who-are-we"><button class="btn btn-primary">READ MORE</button></a>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
</div>

<div class="container-fluid row-2">
        <div class="row">
            <div class="col-12 col-md-8 column-1">
     
                   
                        <div class="inner-text  primary-bg-color text-right">
                            <h2>A Healthy Qi body brings 
optimal health and gives you more energy</h2>
                            <p>Live More, Do More, Feel Good
Stay in control of your health!<br><a href="/book-now"><button class="btn btn-secondary mt-3">Book Now</button></a></p>
                             
                        </div>
                 
             
            </div>
            <div class="col-12 col-md-4 column-2">
                <span class="img-wrap">
                    <img src="assets/gif/acupuncture-points.gif" alt="">
                </span>
            </div>
        </div>
</div>


<div class="container-fluid row-3">
    <h2 class="text-center">Our Treatments</h2>
    @include('frontend.components.flip-cards')
    <div class="d-flex justify-content-center">
        <a href="/treatments"><button class="btn btn-primary">VIEW ALL TREATMENTS</button></a>
    </div>    
</div>

<div class="container-fluid row-4">
        <div class="row">
            <div class="col-12 col-md-6 column-1">
                
                        <span class="img-wrap">
                            <img src="assets/gif/sound-therapy.gif" alt="">
                        </span>
                  
            </div>
            <div class="col-12 col-md-6 column-2">

                    <div class="card card-shadow">
                       
                            <div class="inner-text">
                                <h2>Testimonials</h2>
                                <p>“Once the session was over I felt such a difference, I felt lighter and calm where as before the session all I felt was heaviness and tension”</p>
                                <p>Alonzo R.</p>
                                <a href="/testimonials"><button class="btn btn-primary">MORE REVIEWS</button></a>
                            </div>
                  
                </div>
          
            </div>
        </div>
</div>

<div class="container row-5">
        <div class="row">
            <div class="col-12 col-md-6 column-1">
                <div class="card card-shadow">
                       
                            <div class="inner-text">
                                 <h2>Let’s Detoxify Your Lungs Naturally</h2>
                                 <p>Lung Cleanse for smokers and non smokers Traditional herbal remedy to cleansing your lungs have been found in this list of herbs below:   1. Oregano Histamine reducing herbs like oregano aid in counteracting histamine and may help reduce these reactions. When pollen,... <br><a href="#">read more</a></p>
                               
                            </div>
                            <a href="/blog"><button class="btn btn-primary">VIEW OUR BLOG</button></a>
                 
                </div>
            </div>
            <div class="col-12 col-md-6 column-2">
                   <div class="image">
                        <span class="img-wrap">
                            <img src="assets/gif/cordyceps-sinesis.gif" alt="">
                        </span>
                    </div>
            </div>
        </div>
</div>

 @include('frontend.components.map')
@endsection