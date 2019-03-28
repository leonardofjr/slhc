@component('mail::message')
#This message is from our contact form at http://sacredlighthealing.ca

<strong>Name:</strong> {{$data['name']}} <br>
<strong>Email:</strong> {{$data['email']}} <br>
<strong>Message:</strong> {{$data['message']}}

@endcomponent