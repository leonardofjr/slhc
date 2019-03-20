@extends('layouts.app')

@section('content')
    <h2>{{\Request::route()->getName()}}</h2>
    <form action="/api/services" method="POST">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_name">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control {{ $errors->has('service_name') ? ' is-invalid' : '' }}" id="service_name" name="service_name" value="{{ old('service_name') }}"  placeholder="Enter name">
                 @if ($errors->has('service_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('service_name') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="slug">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}" id="slug" name="slug" value="{{ old('slug') }}"  placeholder="chinese-medicine">
                    @if ($errors->has('slug'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('slug') }}</strong>
                        </span>
                     @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_duration">Duration</label>
            <div class="col-sm-4">
                <select type="dropdown" class="form-control {{ $errors->has('service_duration') ? ' is-invalid' : '' }}" id="service_duration" name="service_duration"  placeholder="Hour">
                    <option value="" selected> Choose...</option>
                    <option value="15" {{ old('service_duration') == "15"  ? "selected" : "" }}>15min</option>
                    <option value="30" {{ old('service_duration') == "30"  ? "selected" : "" }}>30min</option>
                    <option value="60" {{ old('service_duration') == "60"  ? "selected" : "" }}>60min</option>
                </select>
                @if ($errors->has('service_duration'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('service_duration') }}</strong>
                    </span>
                    @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_price">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control {{ $errors->has('service_price') ? ' is-invalid' : '' }}" id="service_price" name="service_price" value="{{ old('service_price') }}"  placeholder="20.00">
                 @if ($errors->has('service_price'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('service_price') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="short_description">Short Description</label>
            <div class="col-sm-10">
                <textarea class="form-control {{ $errors->has('short_description') ? ' is-invalid' : '' }}" id="short_description" name="short_description" value="{{ old('short_description') }}"  placeholder="Enter a short description">{{ old('short_description') }}</textarea>
                 @if ($errors->has('short_description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('short_description') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="detailed_description">Detailed Description</label>
            <div class="col-sm-10">
                <textarea class="form-control {{ $errors->has('detailed_description') ? ' is-invalid' : '' }}" id="detailed_description" name="detailed_description"   placeholder="Enter a description">{{ old('detailed_description') }}</textarea>
                 @if ($errors->has('detailed_description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('detailed_description') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

                               
    </form>

@endsection
