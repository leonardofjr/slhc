<section class="top-footer container py-5">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-12">
            <p>Strengthen Your Power,<br>
Achieve Balance,<br>
Awaken Your Energy,<br>
Rejuvenate Your Soul,<br>
Revive Your Spirit</p>
        </div>
        <div class="col-md-4 col-sm-12 col-12">
            <h3><a>Navigation</a></h3>
            <ul>
                @include('frontend.menus.full-menu')
            </ul>
        </div>

        <div class="col-md-4 col-sm-12 col-12">
            <h2><?php echo $company_name;?></h2>
              @include('frontend.pages.partials.contact-info')
        </div>
    </div>
</section>

@include('frontend.pages/partials/site-info')
