    @foreach($main_pages as $main_page_item)

        @if($main_page_item['path_name'] === 'Treatments')



             <li class="item"><a href="{{url($main_page_item['path_url'])}}">{{$main_page_item['path_name']}} </a>

                <ul class="sub-menu">

            



                    @foreach($treatment_pages as $treatment_item)



                        @if( url($treatment_item['path_url'])  === Request::url())

                            <li class="sub-menu-item active"><a href="{{url($treatment_item['path_url'])}}">{{$treatment_item['path_name']}}</a></li>

                        @else

                            <li class="sub-menu-item"><a href="{{url($treatment_item['path_url'])}}">{{$treatment_item['path_name']}}</a></li>

                        @endif

                        

                    @endforeach

                    

                </ul>

           </li>

     

        @endif

    @endforeach

