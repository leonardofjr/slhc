@extends('layouts.app')

@section('content')
<h2>{{\Request::route()->getName()}}</h2>
<form action="/api/reviews/{{$data->id}}" method="POST">    
        <input type="hidden" name="_method" value="put" />
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="fname">Business Name</label>
            <div class="col-sm-10">
            <input type="text" value="{{$data->business_name}}" class="form-control" id="fname" name="fname" placeholder="John">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="lname">Business Phone</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->business_phone}}"  class="form-control" id="lname" name="lname" placeholder="Doe">
            </div>
        </div>
      
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="lname">Business Email</label>
            <div class="col-sm-10">
                <input type="text"  value="{{$data->business_email}}"  class="form-control" id="lname" name="lname" placeholder="Doe">
            </div>
        </div>
        <div class="my-4">
        <h3>Hours of Operation</h2>
        <table class="table">
        <tr>
            <th>Day</th>
            <th>Open</th>
            <th>Close</th>
            <th>Opened</th>
        </tr>
        @foreach ($hoursOfOperation as $item )
        <tr>
            <th>
                <?php echo jddayofweek($item->day, 1) ?>
            </th>
            <td>
                <input value="{{$item->start}}" type="time">
            </td>
            <td>
                <input value="{{$item->end}}" type="time">
            </td>
            @if($item->opened)
                 <td><input type="checkbox" value="{{$item->opened}}" checked></td>
            @else
                 <td><input type="checkbox" value="{{$item->opened}}"></td>
            @endif
        </tr>
        @endforeach
        </table>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
    