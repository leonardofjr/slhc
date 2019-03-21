<section class="top-footer container py-5">
    <div class="row">
        <div class="col-md-4 col-12">
              <h2><?php echo $company_name;?></h2>
              @include('frontend.pages.partials.contact-info')
            <p>Strengthen Your Power,<br>
Achieve Balance,<br>
Awaken Your Energy,<br>
Rejuvenate Your Soul,<br>
Revive Your Spirit</p>
        </div>
        <div class="col-md-4 col-12">
            <h3>NAVIGATION</h3>
            <ul>
                @include('frontend.menus.primary-menu')
            </ul>
        </div>

     
        <div class="col-md-4 col-12">
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
        </div>
    </div>
</section>

@include('frontend.pages/partials/site-info')
