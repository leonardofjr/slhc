<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 
    use DB;
    use Storage;    
    
    class TreatmentPagesController extends Controller {
   
         public function getTraditionalChineseMedicinePage() {
            $data = [];

            return view('frontend.pages.subpages.treatments.traditional-chinese-medicine');
         }  // getTraditionalChineseMedicinePage() Ends Here

         public function getSacredCrystalHealing() {
            $data = [];

            return view('frontend.pages.subpages.treatments.sacred-crystal-healing');
         }  // getSacredCrystalHealing() Ends Here

         public function getMassagePage() {
            $data = [];

            return view('frontend.pages.subpages.treatments.massage');
         }  // getMassagePage() Ends Here

         public function getReikiPage() {
            $data = [];

            return view('frontend.pages.subpages.treatments.reiki');
         }  // getReikiPage() Ends Here

         public function getInkaShamanicHealingPage() {
            $data = [];

            return view('frontend.pages.subpages.treatments.inka-shamanic-healing');
         }  // getInkaShamanicHealingPage() Ends Here

    }
?>