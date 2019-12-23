@extends('layouts.default')

@section('title', 'Alternative Medicine - Markham, Stouffville')
@section('meta-description-content', 'Our practice revolves around the ancient healing arts of traditional healing.')

@section('content')
  @include('frontend.components.slideshow')
  <section class="container-fluid primary-bg-color">
      <div class="container">
          <div class="row py-3">
              <div class="col-md-9">
                  <h2 class="text-uppercase">HOW CAN WE HELP?</h2>
                  <p>For thousands of years our ancestors worked with various types of healing modalities in order to achieve balance whether it’s was through balancing chakras or Qi ‘ a universal energy that circulates through our body and the universe, which Is still commonly practiced among many cultures today. According to ancient theories of Chinese medicine the flow of qi must always flow freely to maintain a healthy life harmoniously to help achieve longevity. Therefore it is important to take the time to help yourself maintain a balanced lifestyle. </p>
              </div>
              <div class="col-md-3 d-flex align-items-center justify-content-center m-5 m-md-0">
                    <a href="book-now"><button class="btn btn-secondary">BOOK NOW</button></a>
              </div>
          </div>
      </div>
  </section>

  <section class="container-fluid" style="background-color: rgba(241, 101, 34, .2);">
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
  </section>



<section class="container-fluid row-3">
    <h2 class="text-center my-5">TREATMENTS</h2>
    @include('frontend.components.flip-cards')
    <div class="d-flex justify-content-center">
        <a href="/treatments"><button class="btn btn-primary">VIEW ALL TREATMENTS</button></a>
    </div>    
</section>


<section class="container-fluid row-2">
        <div class="row">
            <div class="col-12 col-md-8 column-1">
     
                   
                        <div class="inner-text text-center text-md-right">
                            <h2 class="text-uppercase">A Healthy Qi body brings 
optimal health and gives you more energy</h2>
                            <p>Live More, Do More, Feel Good
Stay in control of your health!<br><a href="/book-now"  ><button class="btn btn-secondary mt-3" >Book Now</button></a></p>
                             
                        </div>
                 
             
            </div>
            <div class="col-12 col-md-4 column-2">
                <span class="img-wrap">
                    <img src="assets/gif/acupuncture-points.gif" alt="">
                </span>
            </div>
        </div>
</section>


<section class="container">
    <h2 class="text-center my-5">TESTIMONIALS</h2>
    <div class="row">
        @if($reviews)
            @foreach ($reviews as $key => $review )
                    @if ($review->verified)
                        <div class="testimonial col-md-4 p-2">
                            <div class="p-3 border">
                                <p class="content font-italic  text-center">{{$review->review}}</p>
                                <p class="name py-0 my-0 font-weight-bold text-center">{{$review->fname}} {{$review->lname}}</p>

                            </div>
                            
                        </div>
                    @endif
                @if ($key == 5)
                    @break;
                @endif
            @endforeach
        @endif
    </div>
</section>

<section class="container-fluidmt-5">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12 text-center py-5">
                    <h2 class="text-uppercase">CONTACT US FOR A FREE CONSULTATION?</h2>
                    <a href="book-now"><button class="btn btn-secondary">BOOK NOW</button></a>
                </div>

            </div>
        </div>
</section>
  
@endsection

