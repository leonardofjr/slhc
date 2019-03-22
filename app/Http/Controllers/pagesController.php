<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 
    use App\Service; 
    use App\Http\Controllers\Backend\ServicesController; 
    use DB;
    use Storage;  
    use Route;  
    use App\Review;
    class PagesController extends Controller {
        public function getHomepage() {
       
            return view('frontend.pages.home');
        } // getHomepage() Ends Here

         public function getWhoAreWePage() {
            $data = [];

            return view('frontend.pages.who-are-we');
         } // getWhoAreWePage() Ends Here

         public function getTreatmentsPage() {
            $services = Service::all();
            return view('frontend.pages.treatments')->withServices( $services);
         }  // getTreatmentsPage() Ends Here


         public function getTreatmentPage($slug) {
            $data = Service::where('slug', $slug)->firstOrFail();
            return view('frontend.pages.subpages.treatments.treatment')->withData($data);
         }  // getTreatmentsPage() Ends Here


         public function getCoursesPage() {
            return view('frontend.pages.courses');
         }  // getCoursesPage() Ends  Here

         public function getTestimonialsPage() {
            $reviews = Review::all();
            return view('frontend.pages.testimonials')->withReviews($reviews);
         }  // getTestimonialsPage() Ends Here

         public function getFAQPage() {
       
            return view('frontend.pages.faq');
         }  // getFAQPage() Ends Here

         public function getContactPage() {
            return view('frontend.pages.contact');
         }  // getContactPage() Ends Here


         public function getBookNowPage() {
            $services = Service::all();
            return view('frontend.pages.book-now')->withServices($services);         
         }  // getBookNowPage() Ends Here


         // Helper Functions

        public function getGalleryTable() {
             return DB::table('gallery_uploads')->get();
        }

    }
?>