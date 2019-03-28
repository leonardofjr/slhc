@component('mail::message')
#This message is from our book now form at http://sacredlighthealing.ca

<strong>Name:</strong> {{$data['name']}} <br>
<strong>Phone:</strong> {{$data['phone']}} <br>
<strong>Email:</strong> {{$data['email']}} <br>
<strong>Service of interest:</strong>
<ul>
    @foreach($data['interests'] as $item) 
        <li> {{$item}}</li>
    @endforeach
</ul>
<strong>Date:</strong> {{$data['date']}} <br>

<strong>Message:</strong> {{$data['message']}}

@endcomponent