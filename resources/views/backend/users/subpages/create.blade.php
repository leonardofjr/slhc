@extends('layouts.app')

@section('content')

    <h2>{{\Request::route()->getName()}}</h2>
    <form action="/user" method="POST">
        {{ csrf_field() }}
        <div class="form-group row">
         <label for="fname" class="col-sm-2 col-form-label text-md-right">{{ __('First Name') }}</label> 
            <div class="col-sm-10">
                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname"  required autofocus>
            </div>
            @if ($errors->has('fname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('fname') }}</strong>
                </span>
            @endif
        </div>
       

        <div class="form-group row">
         <label for="lname" class="col-sm-2 col-form-label text-md-right">{{ __('Last Name') }}</label> 
            <div class="col-sm-10">
                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname"  required autofocus>
            </div>
            @if ($errors->has('lname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lname') }}</strong>
                </span>
            @endif
        </div>
       

        <div class="form-group row">
         <label for="email" class="col-sm-2 col-form-label text-md-right">{{ __('Email') }}</label> 
            <div class="col-sm-10">
                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autofocus>
            </div>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <table class="table">
            <tr>
                <th scope="col">Admin</th>
                <th scope="col">User</th>
                <th scope="col">Visitor</th>
            </tr>
            <td>
            <input type="checkbox" name="role_admin"></td>
                <td>
                 <input type="checkbox" name="role_user"></td>
                 <td>
                <input type="checkbox" name="role_visitor"></td>
        </table>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>    

@endsection
