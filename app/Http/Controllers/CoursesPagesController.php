<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Mail;
    use Illuminate\Routing\Controller;
    use App\Post; 
    use DB;
    use Storage;    
    
    class CoursesPagesController extends Controller {
   
         public function getAcupressureWorkshopPage() {
            $data = [];

            return view('frontend.pages.subpages.courses.acupressure-workshop');
         }  // getTraditionalChineseMedicinePage() Ends Here

         public function getHerbalMedicineWorkshop() {
            $data = [];

            return view('frontend.pages.subpages.courses.herbal-medicine-workshop');
         }  // getSacredCrystalHealing() Ends Here

         public function getSpiritualAwakeningWorkshopPage() {
            $data = [];

            return view('frontend.pages.subpages.courses.spiritual-awakening-workshop');
         }  // getMassagePage() Ends Here
    }
?>