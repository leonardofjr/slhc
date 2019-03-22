@if(\Request::is('/') || \Request::is('/who-are-we'))
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

  </div>
@endif