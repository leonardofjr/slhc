<div class="jumbotron">

  

  @if (\Request::is('/'))

    

     <div class="home-cover"></div>

      <span>

         We have a <strong>moral obligation</strong> to help others

      </span>

 

  @endif



  @if (\Request::is('treatments') || \Request::is('treatments/*'))

    <div class="treatments-cover"></div>

  @endif

 



  @if (\Request::is('who-are-we'))

    <div class="who-are-we-cover"></div>

  @endif

 



  @if (\Request::is('courses') || \Request::is('courses/acupressure-workshop') || \Request::is('courses/herbal-medicine-workshop') ||  \Request::is('courses/spiritual-awakening-workshop')) 

    <div class="courses-cover"></div>

  @endif

 



  @if (\Request::is('treatments/sacred-crystal-healing'))

    <div class="sacred-crystal-healing-cover"></div>

  @endif

 

  @if (\Request::is('treatments/traditional-chinese-medicine')) 

    <div class="traditional-chinese-medicine-cover"></div>

  @endif

 

 

  @if (\Request::is('treatments/massage'))

    <div class="massage-cover"></div>

  @endif

 

 

  @if (\Request::is('treatments/reiki'))

    <div class="reiki-cover"></div>

  @endif

 

 

  @if (\Request::is('treatments/inka-shamanic-healing'))

    <div class="inka-shamanic-healing-cover"></div>

  @endif



   @if (\Request::is('book-now'))

       <div class="book-now-cover"></div>

  @endif



   @if (\Request::is('testimonials')) 

       <div class="testimonials-cover"></div>

  @endif



  @if (!\Request::is('/'))

    @include('frontend.pages.partials.content-header')

  @endif

 



</div>