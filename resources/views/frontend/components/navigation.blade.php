<nav class='navbar navbar-expand-lg navbar-dark bg-dark {{Request::is("/") ? "home" : ""}}'>
  <div class="container">
    <a class="navbar-brand" href="/">@include('../svgs/logo')</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
          @include('frontend.menus.primary-menu')
      </div>
    </div>
  </div>
</nav>

