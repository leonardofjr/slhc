@extends('layouts.app')

@section('content')
        <h2>{{\Request::route()->getName()}}</h2><a class="btn btn-primary" href="{{route("Create Post")}}">Add Post</a>

        <table class="table">
        <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Status</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
        </thead>
                        @foreach($data as $item)

        <tbody>
        <tr>
                <th scope="row">{{$item->author_id}}</th>
                <td>{{$item->title}}</td>
                <td>{{ User::findOrFail($item->author_id)}}</td>
                <td>{{$item->status}}</td>
                <td><a href="/post/{{$item->id}}"><i class="fas fa-edit"></i></a></td>
                <td>
                <form action="/post/{{$item->id}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete" />
                                <button type="submit" class="far fa-trash-alt"></button>
                        </form>
                </td>
        </tr>
        </tbody>
        @endforeach

        </table>
@endsection
