@extends('layouts.default')

@section('title', 'Alternative Medicine - Markham, Stouffville')
@section('meta-description-content', 'Our practice revolves around the ancient healing arts of traditional healing.')

@section('content')


<!--
<section class="container row-1">
        <div class="row">
            <div class="col-12 col-md-6 text-center ">
                    <span class="img-wrap">
                        <img src="assets/png/yin-yang.png" alt="An image of a yin yang.">
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
    </section>
-->
<section class="container-fluid row-2">
        <div class="row">
            <div class="col-12 col-md-8 column-1">
     
                   
                        <div class="inner-text  text-right">
                            <h2 class="text-uppercase">A Healthy Qi body brings 
optimal health and gives you more energy</h2>
                            <p>Live More, Do More, Feel Good
Stay in control of your health!<br><a href="/book-now"  ><button class="btn btn-secondary mt-3" style="padding: 15px 40px!important; font-size: 1em;">Book Now</button></a></p>
                             
                        </div>
                 
             
            </div>
            <div class="col-12 col-md-4 column-2">
                <span class="img-wrap">
                    <img src="assets/gif/acupuncture-points.gif" alt="">
                </span>
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
            @endforeach
        @endif
    </div>
</section>
@endsection

