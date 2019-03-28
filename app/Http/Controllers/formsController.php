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
     
        }// postContact() Ends Here

        public function postBookNow(BookFormValidationRequest $request) {

        }// postBookNow() Ends Here
    }
?>