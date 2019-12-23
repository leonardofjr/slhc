@extends('layouts.default')

@section('title', 'Alternative Medicine - Markham, Stouffville')
@section('meta-description-content', 'Our practice revolves around the ancient healing arts of traditional healing.')

@section('content')
        <div class="container">
                <div class="row">
                        <div class="col-12">
                                @if($services)
                                        @foreach($services as $service)
                                        <div class="row p-3 border m-3">
                                                <div class="col-md-4">
                                                        <img class="img-fluid" src={{asset("storage/" . $service->image)}}>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h2 class="my-0">{{$service->service_name}}</h2>
                                                        <h3 class="my-0">{{$service->service_chinese_name}}</h3>
                                                        <p> {!!$service->detailed_description!!}</p>
                                                        <div class="text-right">
                                                                <div class="h3">${{number_format($service->service_price, 2)}}/ {{floor($service->duration / 3600  * 60 / 60)}}HR
                                                        </div>
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