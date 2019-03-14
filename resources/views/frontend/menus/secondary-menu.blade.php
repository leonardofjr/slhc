<ul class="menu">
    @foreach($treatment_pages as $treatment_item)
        <li><a href="{{url($treatment_item['path_url'])}}">{{$treatment_item['path_name']}}</a></li>
    @endforeach
</ul>