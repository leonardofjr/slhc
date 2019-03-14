@extends('layouts.app')

@section('content')
        <h2>{{\Request::route()->getName()}}</h2><a class="btn btn-primary d-inline-block" href="{{route("Post Service")}}">Add Service</a>

        <table class="table">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        </tbody>
        </table>
@endsection
