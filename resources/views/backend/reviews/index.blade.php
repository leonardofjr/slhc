@extends('layouts.app')

@section('content')
        <div class="card-header">
                <h2>{{\Request::route()->getName()}}</h2><a class="btn btn-primary float-right" href="{{route("Post Review")}}">Add Review</a>
        </div>
        <div class="card-body p-4">
                <table class="table">
                <thead>
                <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Verified</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
                </thead>
                        @foreach($data as $item)

                <tbody>
                <tr>
                        <td>{{$item->fname}}</td>
                        <td>{{$item->lname}}</td>
                        <td>{!!$item->verified ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>'!!}</td>
        
                        <td><a href="/reviews/{{$item->id}}"><i class="fas fa-edit"></i></a></td>
                        <td>
                        <form action="/reviews/{{$item->id}}" method="post">
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
