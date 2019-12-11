@extends('layouts.default')

@section('title', 'Alternative Medicine - Markham, Stouffville')
@section('meta-description-content', 'Our practice revolves around the ancient healing arts of traditional healing.')

@section('content')
        <div class="container">
                <div class="row">
                        <div class="col-12">
                                @if($services)
                                        @foreach($services as $service)
                                        <div class="row">
        
                                                <div class="col-md-9">
                                                        <h2><a href="/treatments/{{$service->slug}}">{{$service->service_name}}</a></h2>
                                                        <p> {{$service->short_description}}</p>
                                                </div>
                                                <div class="col-md-3 d-flex align-items-end justify-content-end">
                                                        <div class="text-right">
                                                        <div>${{number_format($service->service_price, 2)}}/ {{$service->duration}}mins</div>
                                                        <div><a href="/book-now"><button class="btn btn-primary">Book Now</button></a></div>
                                                        </div>
                                                </div>
                                        </div>
                                        @endforeach
                                @endif
                        </div>
                </div>
        </div>
@endsection