@extends('layouts.app')

@section('content')
    <h2>{{\Request::route()->getName()}}</h2>
<form action="/api/reviews/{{$data->id}}" method="POST">    
        <input type="hidden" name="_method" value="put" />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="fname">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control  {{ $errors->has('fname') ? ' is-invalid' : '' }}" id="fname" name="fname" placeholder="John" value="{{ old('fname', $data->fname) }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="lname">Last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control {{ $errors->has('lname') ? ' is-invalid' : '' }}" id="lname" name="lname" placeholder="Doe"value="{{ old('lname', $data->lname) }}">
            </div>
        </div>
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="review">Review</label>
            <div class="col-sm-10">
                <textarea class="form-control {{ $errors->has('review') ? ' is-invalid' : '' }}" id="review" name="review" aria-describedby="emailHelp" placeholder="The service was...">{{ old('review', $data->review) }}</textarea>
            </div>
        </div>
        
        <div class="form-check">
            <input class="form-check-input " type="checkbox" value="verified" id="verfied" name="verified"  {{$data->verified ? 'checked' : ''}}>
            <label class="form-check-label" for="verfied">
                Verfieid
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
