@extends('layouts.page')
@section('title', 'Treatments - Sacred Light Healing Centre')
@section('content')
<h2>{{$data->service_name}}</h2>
<div>
    {{$data->detailed_description}}
</div>
<div>
    ${{$data->service_price}} {{$data->duration}}mins
</div>
@endsection