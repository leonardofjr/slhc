<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src='{{asset("imgs/qi-gong.png")}}' alt="First slide">
      <div class="center-carousel-content">
          <h2>PAIN & INJURY</h2>
          <p>Fast, Effective Results</p>
          <button class="btn btn-primary">{{$company_phone}}</button> <button class="btn btn-teritary">BOOK NOW</button>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src='{{asset("imgs/meditation.png")}}' alt="Second slide">
      <div class="center-carousel-content">
        <h2>STRESS & ANXIETY</h2>
        <p>Calm Your Mind and Body Down</p>
        <button class="btn btn-primary">{{$company_phone}}</button> <button class="btn btn-teritary">BOOK NOW</button>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src='{{asset("imgs/yoga.png")}}' alt="Third slide">
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