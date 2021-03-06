<!DOCTYPE html><?php $url = URL::to("/");?>

<html>

    <head>
            <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>

        <title>@yield('title')</title>

        @include('layouts.partials.head')

    </head>

    <body>

        <header>

                @include('frontend.components.navigation')
                @include('frontend.components.jumbotron')


        </header>

        <main>
            <div class="page-title primary-bg-color">
                <h2 class="text-center m-0 p-0">{{\Request::route()->getName()}}</h2>
            </div>
            <div id="app" class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h4 class="text-center">MENU</h4>
                        <app></app>
                    </div>
                    <div class="col-sm-9">
                        <router-view :key="$route.fullPath"></router-view>
                    </div>
                </div>
            </div>
        </main>

        <footer>

                @include('frontend.components.footer')

        </footer>

    </body>

    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
     <script async defer
src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&callback=initMap">
    </script>

</html>