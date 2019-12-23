@extends('layouts.app')

@section('content')

        <div class="card-header">
                <h2>{{\Request::route()->getName()}}</h2><a class="btn btn-primary float-right" href="{{route("Post Service")}}">Add Service</a>
        </div>

        <div class="card-body p-4">

                <table class="table">
                <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Service Name</th>
                <th scope="col">Price</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
                </thead>
                                @foreach($data as $item)

                <tbody>
                <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->service_name}}</td>
                        <td>${{$item->service_price}}</td>
                        <td><a href="/services/{{$item->id}}"><i class="fas fa-edit"></i></a></td>
                        <td>
                        <form action="/services/{{$item->id}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete" />
                                        <button type="submit" class="far fa-trash-alt"></button>
                                </form>
                        </td>
                </tr>
                </tbody>
                @endforeach

                </table>
        </div>

@endsection
