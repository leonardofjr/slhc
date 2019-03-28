<p>Name: {{$name}}</p>

<p>Phone: {{$phone}}</p>

<p>Email: {{$email}}</p>

<p>What are you looking for?:<ul> @foreach($interests as $interest) <li> {{$interest}} </li>@endforeach </ul></p>

<p>Preferred Date: {{$date}}</p>

<p>Message: {{$message}}</p>

<small>This mail is sent via book form on sacredlighthealing.ca</small>