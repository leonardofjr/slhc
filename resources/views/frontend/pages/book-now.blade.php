@extends('layouts.default')

@section('title', 'Alternative Medicine - Markham, Stouffville')
@section('meta-description-content', 'Our practice revolves around the ancient healing arts of traditional healing.')

@section('content')

<div class="container">

    <h5 class="text-center">Ready to book your treatment? </h5>

    <p class="text-center">We are here to help! If you're an old timer and don't feel like booking online, please feel free to call or text us at    @include('frontend.pages.partials.phone-link') and we will do our best to accommodate.</p>

<div class="row">
        <div class="col-sm-7">
             <h4>Complete the form below!</h4>
            @include('frontend.components/book-now-form')
        </div>
        <div  class="col-sm-5">
                <h4>Time Schedule</h4>
                @include('frontend.components.schedule')
        </div>
   </div>

</div>

               

        

@endsection