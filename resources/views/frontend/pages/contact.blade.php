@extends('layouts.default')

@section('title', 'Alternative Medicine - Markham, Stouffville')
@section('meta-description-content', 'Our practice revolves around the ancient healing arts of traditional healing.')

@section('content')
    <div class="container py-5">
        <div class="pb-3">
            <h4 class="text-center">Find out more information</h4>
            <p class="text-center">If you would like to discuss our treatments, please contact us and we will be happy to provide with the information you need.</p>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <h4>Address</h4>
                 <h6>{{$company_name}}</h6>
                <p>Phone: @include('frontend.pages.partials.phone-link')</p>
                <p>Email: @include('frontend.pages.partials.email-link')</p>
                    <a href="https://goo.gl/maps/zEyD95aCnfF2"> {{$company_address}}, <br>{{$company_city}}, {{$company_territory}},<br>{{$company_postal_code}}</a>

                @include('frontend.components.map')
            </div>


            <div class="col-sm-7 ">
                <h4>Ask a question</h4>
                @include('frontend.components/contact-form')
            </div>
        </div>
    </div>
@endsection