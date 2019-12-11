@if(\Request::is('/') || \Request::is('/who-are-we'))
  <div class="jumbotron">

    @if (\Request::is('/'))
      <div class="home-cover"></div>
        <h1 class="main-heading">ALTERNATIVE MEDICINE IN MARKHAM</h1>
    @endif

    @if (\Request::is('treatments') || \Request::is('treatments/*'))

      <div class="treatments-cover"></div>

    @endif


    @if (\Request::is('who-are-we'))

      <div class="who-are-we-cover"></div>

    @endif

  </div>
@endif