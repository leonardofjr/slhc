<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 
    use DB;
    use Storage;  
    use Route;  
    
    class PagesController extends Controller {
        public function getHomepage() {
       
            return view('frontend.pages.home');
        } // getHomepage() Ends Here

         public function getWhoAreWePage() {
            $data = [];

            return view('frontend.pages.who-are-we');
         } // getWhoAreWePage() Ends Here

         public function getTreatmentsPage() {
            return view('frontend.pages.treatments');
         }  // getTreatmentsPage() Ends Here


         public function getCoursesPage() {
            return view('frontend.pages.courses');
         }  // getCoursesPage() Ends  Here

         public function getTestimonialsPage() {
            return view('frontend.pages.testimonials');
         }  // getTestimonialsPage() Ends Here

         public function getFAQPage() {
       
            return view('frontend.pages.faq');
         }  // getFAQPage() Ends Here

         public function getContactPage() {
            return view('frontend.pages.contact');
         }  // getContactPage() Ends Here


         public function getBookNowPage() {
            return view('frontend.pages.book-now');
         }  // getBookNowPage() Ends Here


         // Helper Functions

        public function getGalleryTable() {
             return DB::table('gallery_uploads')->get();
        }

    }
?>