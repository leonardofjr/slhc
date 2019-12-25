<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <picture>
        <source class="d-block w-100" srcset={{asset("imgs/qi-gong.png")}} media="(min-width: 768px)">
        <source class="d-block w-100" srcset={{asset("imgs/qi-gong-mobile-portrait.png")}} media="(min-width: 320px) and (orientation: portrait)">
        <source class="d-block w-100" srcset={{asset("imgs/qi-gong-mobile-landscape.png")}} media="(min-width: 568px) and (orientation: landscape)">
          <img class="d-block w-100" src="{{asset("imgs/qi-gong.png")}}" alt="">
      </picture>
      <div class="center-carousel-content">
          <h2>PAIN & INJURY</h2>
          <p>Fast, Effective Results</p>
          <button class="btn btn-primary">{{$company_phone}}</button> <button class="btn btn-teritary">BOOK NOW</button>
      </div>
    </div>
    <div class="carousel-item">
      <picture>
        <source class="d-block w-100" srcset={{asset("imgs/meditation.png")}} media="(min-width: 768px)">
        <source class="d-block w-100" srcset={{asset("imgs/meditation-mobile-portrait.png")}} media="(min-width: 320px) and (orientation: portrait)">
        <source class="d-block w-100" srcset={{asset("imgs/meditation-mobile-landscape.png")}} media="(min-width: 568px) and (orientation: landscape)">
          <img class="d-block w-100" src="{{asset("imgs/meditation.png")}}" alt="">
      </picture>
      <div class="center-carousel-content">
        <h2>STRESS & ANXIETY</h2>
        <p>Calm Your Mind and Body Down</p>
        <button class="btn btn-primary">{{$company_phone}}</button> <button class="btn btn-teritary">BOOK NOW</button>
    </div>
    </div>
    <div class="carousel-item">
      <picture>
        <source class="d-block w-100" srcset={{asset("imgs/yoga.png")}} media="(min-width: 768px)">
        <source class="d-block w-100" srcset={{asset("imgs/yoga-mobile-portrait.png")}} media="(min-width: 320px) and (orientation: portrait)">
        <source class="d-block w-100" srcset={{asset("imgs/yoga-mobile-landscape.png")}} media="(min-width: 568px) and (orientation: landscape)">
          <img class="d-block w-100" src="{{asset("imgs/yoga.png")}}" alt="">
      </picture>
      <div class="center-carousel-content">
        <h2>CHAKRA HEALING</h2>
        <p>Keep Healthy, Happy and Vibrant</p>
        <button class="btn btn-primary">{{$company_phone}}</button> <button class="btn btn-teritary">BOOK NOW</button>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>