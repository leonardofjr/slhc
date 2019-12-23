@extends('layouts.app')

@section('content')
<div class="card-header">
    <h2>{{\Request::route()->getName()}}</h2>
</div>
<hr>
<h3>Company Profile</h3>
<hr>
<form action="/settings" method="POST">    
        {{ csrf_field()}}
        <input type="hidden" name="_method" value="put" />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="company_name">Company Name</label>
            <div class="col-sm-10">
            <input type="text" value="{{$data->company_name}}" class="form-control {{ $errors->has('company_name') ? ' is-invalid' : '' }}" id="company_name" name="company_name" >
            @if ($errors->has('company_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('company_name') }}</strong>
                </span>
            @endif
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="phone">Phone</label>
            <div class="col-sm-10">
                <input type="phone"  value="{{$data->phone}}"  class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" name="phone">
               @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="email">Email</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->email}}"  class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
      
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="street_address">Street Address</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->street_address}}"  class="form-control {{ $errors->has('street_address') ? ' is-invalid' : '' }}" id="street_address" name="street_address">
                @if ($errors->has('street_address'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('street_address') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
      
      
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="city">City</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->city}}"  class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" id="city" name="city">
                @if ($errors->has('city'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="province">Province</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->province}}"  class="form-control {{ $errors->has('province') ? ' is-invalid' : '' }}" id="province" name="province">
                @if ($errors->has('province'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('province') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
      
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="postal_code">Postal Code</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->postal_code}}"  class="form-control {{ $errors->has('postal_code') ? ' is-invalid' : '' }}" id="province" name="postal_code">
                @if ($errors->has('postal_code'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('postal_code') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
      

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="facebook">Facebook</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->facebook}}"  class="form-control {{ $errors->has('facebook') ? ' is-invalid' : '' }}" id="facebook" name="facebook">
                @if ($errors->has('facebook'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('facebook') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="instagram">Instagram</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->instagram}}"  class="form-control {{ $errors->has('instagram') ? ' is-invalid' : '' }}" id="instagram" name="instagram">
                @if ($errors->has('instagram'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('instagram') }}</strong>
                    </span>
                 @endif
            </div>
        </div>

        <div class="my-4">
        <hr>
        <h3>Hours of Operation</h2>
        <table class="table">
        <tr>
            <th>Day</th>
            <th>Open</th>
            <th>Close</th>
        </tr>
        @foreach($hoursOfOperation as $item)
            <tr>
                <td>{{jddayofweek($item->day, 1)}}</td>
                <td><input type="time" value="{{$item->start}}" name="start[]"></td>
                <td><input type="time" value="{{$item->end}}" name="end[]"></td>
            </tr>
        @endforeach
        </table>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
    