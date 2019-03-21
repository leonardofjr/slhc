<ul>
    <li><i class="fas fa-phone"></i> <span><strong>Phone:</strong></span>@include('frontend.pages.partials.phone-link')</li>
    <li><i class="fas fa-envelope"></i> <span><strong>Email:</strong></span>@include('frontend.pages.partials.email-link')</li>
    <li><i class="fas fa-map-marker-alt"></i> <span><strong>Address:</strong></span><a href="https://goo.gl/maps/zEyD95aCnfF2"> {{$company_address}},{{$company_city}}, {{$company_territory}}</a></li>
</ul>