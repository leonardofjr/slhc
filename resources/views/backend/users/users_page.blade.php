@extends('layouts.app')

@section('content')
        <h2>{{\Request::route()->getName()}}</h2><a class="btn btn-primary" href="{{route("Post Service")}}">Add Service</a>

        <table class="table">
        <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Admin</th>
        <th scope="col">User</th>
        <th scope="col">Visitor</th>
        <th scope="col">Edit</th>
        <th scope="col">Assign Roles</th>
        </tr>
        </thead>
                        @foreach($users as $user)

        <tbody>
        <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td>
                <input type="checkbox" name="role_admin" {{$user->hasRole('Admin') ? 'checked' : ''}}></td>
                <td>
                 <input type="checkbox" name="role_user" {{$user->hasRole('User') ? 'checked' : ''}}></td>
                 <td>
                <input type="checkbox" name="role_visitor" {{$user->hasRole('Visitor') ? 'checked' : ''}}></td>
                <td><a href="/services/{{$user->id}}"><i class="fas fa-edit"></i></a></td>
                <td>

                </td>
        </tr>
        </tbody>
        @endforeach

        </table>
@endsection
