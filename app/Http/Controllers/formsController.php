<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\ContactFormValidationRequest;
    use App\Http\Requests\BookFormValidationRequest;
    use DB;
    use Mail;
    use App\Post; 

    class FormsController extends Controller {
        public function postContact(ContactFormValidationRequest $request) {
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'inquiry' => $request->input('inquiry'),
                'recaptchaToken' => $request->input('g-recaptcha-response'),
            ];

         

            Mail::send('emails.process-contact', $data , function ($m) use ($data) {
            $m->from($data['email'], $data['name']);
            $m->to('mfelipa@sacredlighthealing.ca')->subject('This mail is sent via contact form on sacredlighthealing.ca');
        });
        return response()->json($data);
        }// postContact() Ends Here

        public function postBookNow(BookFormValidationRequest $request) {

            $data = [
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'interests' => $request->input('interests'),
                'date' => $request->input('date'),
                'inquiry' => $request->input('inquiry'),
                'recaptchaToken' => $request->input('g-recaptcha-response'),

            ];

         

            Mail::send('emails.process-book-now', $data , function ($m) use ($data) {
            $m->from($data['email'], $data['name']);
            $m->to('mfelipa@sacredlighthealing.ca')->subject('This mail is sent via book now form on sacredlighthealing.ca');
        });
        return response()->json($data);
        }// postBookNow() Ends Here
    }
?>