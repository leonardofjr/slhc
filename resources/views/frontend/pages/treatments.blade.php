@extends('layouts.page')
@section('title', 'Treatments - Sacred Light Healing Centre')
@section('content')
        <div class="row">
                <div class="col-12">
                        <table  class="table">
                                <thead>
                                        <th style="width: 20%;" scope="col">Service Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Schedule an Appointment</th>
                                </thead>
                        @foreach($data as $item)

                                                <tbody>
                                                        <td> {{$item->service_name}}</td>
                                                        <td> {{$item->short_description}}</td>
                                                        <td> {{$item->duration}}</td>
                                                        <td> ${{$item->service_price}}</td>
                                                        <td><a href="/treatments/{{$item->slug}}">More details...</a></td>
                                                        <td>  <a href="/book-now"><button class="">Book Now</button></a></td>
                                                </tbody>

                        @endforeach
                 </table>
                       
                </div>
       </div>
@endsection