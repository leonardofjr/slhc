<div class="row py-5">
    <!-- Card 1 -->
    @foreach ($services as $key => $service_item)
        <div class="card-container col-12 col-sm-6 col-md-3 col-lg-3">
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                    <!-- front content -->
                    <div class="front" style='background-image: url("{{'storage/' . $service_item->image}}");'>
                        <div class="content">
                            <h2> {{$service_item->service_chinese_name}} <br> <hr class="lf-line"> {{$service_item->service_name}}</h2>
                            <hr>   
                                <div class="text-center h5" style="color:white">${{number_format($service_item->service_price, 2)}} /
                                    @if (floor($service_item->duration / 3600  * 60 / 60) < 1)
                                    {{floor($service_item->duration / 3600  * 60)}}mins
                                    @else
                                    {{floor($service_item->duration / 3600  * 60 / 60)}}HR
                                    @endif
                                </div>
                        </div>
                        <!-- front content -->
                    </div>
                    <!-- back content -->
                    <div class="back text-center">
                        <div class="content">
                            <h2>{{$service_item->service_chinese_name}} <br> <hr class="lf-line">{{$service_item->service_name}}</h2>
                            <p>{!!$service_item->short_description!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @if($key === 3)) {
           @break;
       }
       @endif
    @endforeach
  
</div>