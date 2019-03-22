<table class="table table-sm">
    <tr>
        <th>Day</th>
        <th>Start</th>
        <th>End</th>
    </tr>
@foreach ( $hours_of_operation as $item )
<tr>   
    <td>{{jddayofweek($item->day, 2)}}</td>
    <td>{{ ($item->start) ? date("h:i A", strtotime($item->start)) : "CLOSED" }}</td>
    <td>{{ ($item->end) ? date("h:i A", strtotime($item->end)) : "CLOSED" }}</td>
</tr> 
@endforeach
</table>
