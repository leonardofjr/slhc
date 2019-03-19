@extends('layouts.app')

@section('content')
        <h2>{{\Request::route()->getName()}}</h2><a class="btn btn-primary" href="{{route("Add User")}}">Add User</a>

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
                <input type="checkbox" disabled name="role_admin" {{$user->hasRole('Admin') ? 'checked' : ''}}></td>
                <td>
                 <input type="checkbox" disabled name="role_user" {{$user->hasRole('User') ? 'checked' : ''}}></td>
                 <td>
                <input type="checkbox" disabled name="role_visitor" {{$user->hasRole('Visitor') ? 'checked' : ''}}></td>
                <td><a href="/users/{{$user->id}}"><i class="fas fa-edit"></i></a></td>
        </tr>
        </tbody>
        @endforeach

        </table>
@endsection
