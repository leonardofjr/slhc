<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Route;

class FeaturedServicesComposer {
  public function getRoutesByController($findController) {
            $routeCollection = Route::getRoutes();
            $data = array();
            foreach ($routeCollection as $key => $value) {
                $page_controller = $value->getActionName();
                if (strpos($page_controller, $findController)  !== false) {
                    $path_url = $value->uri();
                    $path_name = $value->getName();
                    $data[$key] = [
                        'path_name' => $path_name,  
                        'path_url' => $path_url,  
                    ];
                }
            }
            return $data;
    }

    public function compose(View $view) {

      $mainPages = $this->getRoutesByController('App\Http\Controllers\PagesController@');
      $treatmentPages = $this->getRoutesByController('App\Http\Controllers\TreatmentPagesController@');
      $coursePages = $this->getRoutesByController('App\Http\Controllers\CoursesPagesController@');
 
      $view->with([
            'main_pages' => $mainPages,
            'treatment_pages' => $treatmentPages,
            'course_pages' => $coursePages,
        ]);
   }


}
?>