@extends('layouts.default')
@section('title', 'Book Now - Sacred Light Healing Centre')
@section('content')
<div class="container">
    <h5 class="text-center">Ready to book your treatment? Complete the form below!</h5>
    <p class="text-center">We are here to help! If you're an old timer and don't feel like booking online, please feel free to call or text us at    @include('frontend.pages.partials.phone-link') and we will do our best to accommodate.</p>
    @include('frontend.components/book-now-form')
</div>
               
        
@endsection