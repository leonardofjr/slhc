<section class="top-footer container py-5">
    <div class="row">
        <div class="col-md-4 col-12">
            <div class="mb-2">
                <a  href="/">@include('../svgs/logo')</a>
            </div>
            <p>Strengthen your power, acheieve balance, awaken your energy, rejuvenate your soul, revive your spirit
            </p>

            <div>
                <h5>Reach us at social media</h5>
                <i class="fab fa-facebook fa-2x mr-2"></i>
                <i class="fab fa-instagram fa-2x"></i>
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
            <!--
            <h3>SCHEDULE</h3>
            <table class="table">
                <tr>
                    <th>Day</th>
                    <th>Start</th>
                    <th>End</th>
                </tr>
            @foreach ( $hours_of_operation as $item )
            <tr>   
                <td>{{jddayofweek($item->day, 1)}}</td>
                <td>{{date("h:i A", strtotime($item->start))}}</td>
                <td>{{date("h:i A", strtotime($item->end))}}</td>
            </tr> 
            @endforeach
            </table>
            -->
        </div>
    </div>
</section>

@include('frontend.pages/partials/site-info')
