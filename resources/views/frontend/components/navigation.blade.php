  @if (\Request::is('/')) 

    <nav class="main-navigation d-none d-xl-block d-lg-block d-md-none d-sm-none"> 

    @else 

    <nav class="main-navigation d-none d-xl-block d-lg-block d-md-none d-sm-none" style="position:initial; background-color:black;"> 

  @endif



  <div class="container">

  <div class="row">

      <div class="col-lg-3 col-md-3 col-sm-2 logo">

        <a href="/">@include('../svgs/logo')</a>

      </div>

      

    <ul class="col-lg-9  col-md-9 col-sm-10 text-right">

         @include('frontend.menus.primary-menu')

      </ul>

  </div>

  </div>

</nav>



<nav class="d-block  d-sm-block d-md-block d-lg-none navbar navbar-dark mobile-navigation">

      <div class="row">

        <div class="pt-3 col-9 pl-5">

              <a href="/">@include('../svgs/logo')</a>

        </div>

        <div id="hamburger-button-container" class="col-3">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">

           <span class="navbar-toggler-icon"></span>

          </button>

        </div>

      </div>





    <div id="navbarToggleExternalContent" class="collapse">

      <ul id="nav-menu">

           @include('frontend.menus.primary-menu')

      </ul>

    </div>



</nav>





