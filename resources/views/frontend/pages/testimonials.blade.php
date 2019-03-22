@extends('layouts.default')

@section('title', 'Testimonials - Sacred Light Healing Centre')

@section('content')

<div class="container">
<h5 class="text-center mb-5">Find out What Our Clients Say About Us</h5>
    <div class="row">
        @if($reviews)
            @foreach ($reviews as $review )
            <div class="testimonial col-md-4">
                <p class="name py-0 my-0 font-weight-bold">{{$review->fname}}</p>
                <p class="date">{{date_format($review->created_at, 'd/M/Y')}}</p>
                <p class="content font-italic">{{$review->review}}</p>
                <hr class="py-3">
            </div>
            @endforeach
        @endif
    </div>
</div>

@endsection