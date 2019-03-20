@extends('layouts.app')

@section('content')
    <h2>{{\Request::route()->getName()}}</h2>
    <form action="/api/reviews" method="POST">
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
        
        <div class="form-check">
            <input class="form-check-input " type="checkbox" value="verified" id="verfied" name="verified">
            <label class="form-check-label" for="verfied">
                Verfieid
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
