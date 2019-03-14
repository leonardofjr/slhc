@foreach($main_pages as $main_page_item)

            <li class="item"><a href="{{url($main_page_item['path_url'])}}">{{$main_page_item['path_name']}}</a></li>

    @endforeach