<!DOCTYPE html><?php $url = URL::to("/");?>
<html>
    <head>
        <title>@yield('title')</title>
        @include('layouts.partials.head')
    </head>
    <body>
        <header>
                @include('frontend.components.navigation')
                @include('frontend.components.jumbotron')
        </header>
        <section class="container main-wrapper">
            <div class="row">
          
                <aside class="d-none d-md-block col-md-3  services-menu">
                   <h2>Menu</h2>
                   <ul>
                    @if (\Request::is('courses', 'courses/*'))
                         @include('frontend.menus.courses-menu')
                    @endif
                                
                    @if (\Request::is('treatments', 'treatments/*'))
                         @include('frontend.menus.treatments-menu')
                    @endif
                    </ul>
                </aside>
                <main class="col-12 col-sm-12 col-md-9 col-lg-9">
                  
                    <div class="content">
                        @yield('content')
                    </div>
                </main>
            </div>
         </section>
        <footer>
                @include('frontend.components.footer')
        </footer>
    </body>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/dist/scripts/scripts.js"></script>
</html>