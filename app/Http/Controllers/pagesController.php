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
            $reviews = Review::all();
            $services = Service::all();
            return view('frontend.pages.home')->withReviews($reviews)->withServices($services);
        } // getHomepage() Ends Here

         public function getWhoAreWePage() {
            $services = Service::all();
            return view('frontend.pages.who-are-we')->withServices($services);
         } // getWhoAreWePage() Ends Here

         public function getTreatmentsPage() {
            $services = Service::all();
            return view('frontend.pages.treatments')->withServices($services);
         }  // getTreatmentsPage() Ends Here



        public function getGalleryTable() {
             return DB::table('gallery_uploads')->get();
        }

    }
?>