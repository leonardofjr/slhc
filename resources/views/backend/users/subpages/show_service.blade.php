@extends('layouts.app')

@section('content')

    <h2>{{\Request::route()->getName()}}</h2>
    <form action="/api/services/{{$data->id}}" method="POST">
                <input type="hidden" name="_method" value="put" />

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_name">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="service_name" value="{{$data->service_name}}" name="service_name" aria-describedby="emailHelp" placeholder="Enter name">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="slug" >Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" name="slug" value="{{$data->slug}}"  aria-describedby="emailHelp" placeholder="chinese-medicine">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_duration">Duration</label>
            <div class="col-sm-4">
                <select type="dropdown" class="form-control" id="service_duration" name="service_duration" aria-describedby="emailHelp" placeholder="Hour">
                    <option selected> Choose...</option>
                    <option value="15">15min</option>
                    <option value="30">30min</option>
                    <option value="60">60min</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="service_price">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="service_price" name="service_price" aria-describedby="emailHelp" placeholder="20.00" value="{{$data->service_price}}" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="short_description">Short Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="short_description" name="short_description" aria-describedby="emailHelp" placeholder="Enter a short description">{{$data->short_description}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="detailed_description">Detailed Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="detailed_description" name="detailed_description" aria-describedby="emailHelp" placeholder="Enter a description">{{$data->detailed_description}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>    

@endsection

