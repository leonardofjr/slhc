@extends('layouts.default')

@section('title', 'Alternative Medicine - Markham, Stouffville')
@section('meta-description-content', 'Our practice revolves around the ancient healing arts of traditional healing.')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h3 >Ancient Healing Techniques 
Still Practiced Today</h3>
            <p>We treat acute or chronic stage conditions 
From tension headaches to weight loss, common cold and much more. </p>
<p>Our healing techniques revolves around the ancient art of Acupressure & Herbal Medicine. Our treatments are combined with other Chinese medicine modalities such as acupressure, tuina massage, cupping etc...</p>

            <p>All Our treatments are performed based of consultation in order to determine the best possible holistic treatment plan using acupressure, herbs and other instruments to achieve harmony & tranquility.</p>
            <p> Our drug free treatment plans benefit the mind body & spirit of each Individual every time. </p>
            <p>
Call us to setup a consultation at 416-907-4697</p>
        </div>
    </div>

    <h2 class="text-center mb-5">Practitioners</h2>
    @include('frontend.components.employees')

</div>
<div class="container-fluid row-3 my-5">
    @include('frontend.components.flip-cards')
    <div class="d-flex justify-content-center">
        <a href="/treatments"><button class="btn btn-primary">VIEW ALL TREATMENTS</button></a>
    </div>
</div>

@endsection