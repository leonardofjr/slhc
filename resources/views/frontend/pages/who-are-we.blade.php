@extends('layouts.default')
@section('title', 'Who are we - Sacred Light Healing Centre')
@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-6">
            <h5 >Ancient Healing Techniques 
Still Practiced Today</h5>
            <p>We treat acute or chronic stage conditions 
From tension headaches to weight loss, common cold and much more. </p>
<p>Our healing techniques revolves around the ancient art of Acupressure & Herbal Medicine. Our treatments are combined with other Chinese medicine modalities such as acupressure, tuina massage, cupping etc...</p>

        </div>
        <div class="col-md-6">
            <p>All Our treatments are performed based of consultation in order to determine the best possible holistic treatment plan using acupressure, herbs and other instruments to achieve harmony & tranquility.</p>
            <p> Our drug free treatment plans benefit the mind body & spirit of each Individual every time. </p>
            <p>
Call us to setup a consultation at 416-907-4697</p>
        </div>
    </div>

    <h2 class="text-center mb-5">Practitioners</h2>

   <div id="employee-container" class="row">
        <div class="col-md-6">
            <!-- <div class="img-container">
            <img src="http://localhost/wp-slhc/wp-content/uploads/2018/07/miguel-felipa-ames.gif" alt="">
            </div> -->
             <div class="content text-center">
                <h5 class="employee-name">Miguel Felipa Ames</h5>
                <small class="employee-title">C.C.H.P, R.N.C.P</small>
                <p>Miguel is a health wellness practitioner & educator with many years an experience studying, practicing teaching an assortment of health-related techniques. His background is in natural health holistic science and is a qualified graduate of Acupuncture and has been involved with natural medicine since 2010. He has experience working with herbs and other healing instruments like needles, cups, pressure, moxibustion and much more.
               </p>
            </div>
        </div>

        <div class="col-md-6">
        
            <!--<div class="img-container">
            <img src="http://localhost/wp-slhc/wp-content/uploads/2018/07/martha-rivera.gif" alt="">
            </div>-->

            <div class="content text-center">
                <h5 class="employee-name">Martha Rivera</h5>
                <small class="employee-title">Reiki Practitioner</small>
                <p>Martha's primary passion is to guide you to live a pain free life physically, mentally, emotionally and spiritually. Her journey to date has brought her to understand deeply the power we all posses within ourselves to heal any area of our lives. Her desire is to support, encourage and inspire people who feel blocked in any area of their life, to move forward, and create the changes they seek</p>
            </div>

        </div>

    </div>
</div>
<div class="container-fluid row-3 my-5">
    @include('frontend.components.flip-cards')
    <p class="text-center"><a href="/treatments">View All Our Treatments</a></p>
    
</div>

@endsection