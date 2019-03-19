@extends('layouts.app')

@section('content')
<h2>{{\Request::route()->getName()}}</h2>
<form action="/api/settings" method="POST">    
        <input type="hidden" name="_method" value="put" />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="business_name">Business Name</label>
            <div class="col-sm-10">
            <input type="text" value="{{$data->business_name}}" class="form-control" id="business_name" name="business_name" placeholder="John">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="business_phone">Business Phone</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->business_phone}}"  class="form-control" id="business_phone" name="business_phone" placeholder="Doe">
            </div>
        </div>
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="business_email">Business Email</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->business_email}}"  class="form-control" id="business_email" name="business_email" placeholder="Doe">
            </div>
        </div>
        <div class="my-4">
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
    