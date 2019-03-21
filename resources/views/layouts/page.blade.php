<!DOCTYPE html><?php $url = URL::to("/");?>

<html>

    <head>
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

        <main class="container main-wrapper">
            <div id="app" class="row">
                <div class="col-sm-3">
                    <app></app>
                </div>
                <div class="col-sm-9">
                     <router-view></router-view>
                </div>
            </div>
         
        </main>

        <footer>

                @include('frontend.components.footer')

        </footer>

    </body>

    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="/dist/scripts/scripts.js"></script>

</html>