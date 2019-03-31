@extends('layouts.default')

@section('title', 'Testimonials - Sacred Light Healing Centre')

@section('content')

<h3 class="text-center mb-5">Find out What Our Clients Say About Us</h3>

<div class="container-fluid my-5" style="background-color: black; color: #fff;">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 align-self-center">
                <h4>LEAVE US A REVIEW TODAY</h4>
            </div>
            <div class="col-md-8 py-5 align-self-center">
                <form action="/testimonials" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="fname">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  {{ $errors->has('fname') ? ' is-invalid' : '' }}" id="fname" name="fname" placeholder="John" value="{{ old('fname') }}">
                                    @if ($errors->has('fname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fname') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="lname">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control {{ $errors->has('lname') ? ' is-invalid' : '' }}" id="lname" name="lname" placeholder="Doe"value="{{ old('lname') }}">
                                    @if ($errors->has('lname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lname') }}</strong>
                                        </span>
                                    @endif        
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="review">Review</label>
                            <div class="col-sm-10">
                                <textarea class="form-control {{ $errors->has('review') ? ' is-invalid' : '' }}" id="review" name="review" aria-describedby="emailHelp" placeholder="The service was...">{{ old('review') }}</textarea>
                                    @if ($errors->has('review'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('review') }}</strong>
                                        </span>
                                    @endif    
                            </div>
                        </div>
                        
                        <input class="form-check-input " type="hidden" value="" name="verified">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @if($reviews)
            @foreach ($reviews as $key => $review )
            @if ($review->verified)
                <div class="testimonial col-md-4">
                    <p class="name py-0 my-0 font-weight-bold">{{$review->fname}} {{$review->lname}}</p>
                    <p class="date">{{date_format($review->created_at, 'd/M/Y')}}</p>
                    <p class="content font-italic">{{$review->review}}</p>
                    <hr class="py-3">
                </div>
            @endif
            @endforeach
        @endif
    </div>
</div>

@endsection