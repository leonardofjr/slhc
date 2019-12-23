@extends('layouts.app')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-header">
                        <h2>{{\Request::route()->getName()}}</h2>
                    </div>


                    You are logged in!
@endsection
