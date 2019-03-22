<section class="top-footer container py-5">
    <div class="row">
        <div class="col-md-4 col-12">
            <div class="mb-2">
                <a  href="/">@include('../svgs/logo')</a>
            </div>
            <p>Strengthen your power, acheieve balance, awaken your energy, rejuvenate your soul, revive your spirit
            </p>

            <div>
                <h5>REACH US OUT AT SOCIAL MEDIA</h5>
                @if ($facebook)
                    <a href="{{$facebook}}"><i class="fab fa-facebook fa-2x mr-2"></i></a>
                @endif
                @if ($facebook)
                   <a href="{{$instagram}}"><i class="fab fa-instagram fa-2x"></i></a>
                @endif
            </div>
        </div>
        <div class="col-md-4 col-12">
            <h5>NAVIGATION</h5>
            <ul>
                @include('frontend.menus.primary-menu')
            </ul>
        </div>

     
        <div class="col-md-4 col-12">
            <h5>CONTACT</h5>
            @include('frontend.pages.partials.contact-info')
            <a href="{{$facebook}}">
                <img src="{{asset('assets/png/facebook-profile-image.png')}}" class="img-fluid" alt="">
            </a>
        </div>
    </div>
</section>

@include('frontend.pages/partials/site-info')
