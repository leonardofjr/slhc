<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service; 
use App\DurationDropdown;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;


class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private const TEMP_DIRECTORY = 'temp/';
    private const IMAGE_DIRECTORY = 'png/';
    private $uploaded_image = false;


    public function index()
    {
        $data = Service::all();
        return view('backend.services.index')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $duration_dropdown = DurationDropdown::all();

        return view('backend.services.subpages.create')->withDurationDropdown($duration_dropdown);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validating Request
        $validatedData = $request->validate([
            'service_name' => 'required',
            'service_chinese_name' => 'required',
            'service_duration' =>'required',
            'service_image_file' =>'required',
            'service_price' =>'required',
            'short_description' =>'required',
            'detailed_description' =>'required',
        ]);

        $image_file = ServicesController::IMAGE_DIRECTORY . str_replace(' ', '_', $request->service_name) . '.png';
        // Updating Values
        $service = new Service();
        $service->service_name =  $request->service_name;
        $service->service_chinese_name =  $request->service_chinese_name;
        $service->image = $image_file;
        $service->slug =  str_replace(' ','_',strtolower($request->service_name));
        $service->duration =  $request->service_duration;
        $service->service_price =  $request->service_price;
        $service->short_description =  $request->short_description;
        $service->detailed_description =  $request->detailed_description;
        // Handle Image 
        if (Storage::exists(ServicesController::TEMP_DIRECTORY)) {
             Storage::copy(Storage::allFiles(ServicesController::TEMP_DIRECTORY)[0], $image_file);
        }
        // Saving 
        $service->save(); 
        return redirect('/services');  
     }

     public function uploadImage(Request $request) 
     {  
        /** Clearing our temp directory */
        $this->deleteTempDirectory();
        /*** Getting our encoded base64 image created using the croppiejs library   ***/
        $encoded_image = $request->input('image');
        // Generating image name
        $img_name = time() . '.png';
        // Preparing our decoded base64 image by removing unnecessary characters to store in our temp directory.
        $img_array = explode(';', $encoded_image);
        $img_array_2 = explode(',', $img_array[1]);
        $prepared_base64_image = $img_array_2[1];
        // Storing our prepared base64 image file to the temp directory.
        Storage::put(ServicesController::TEMP_DIRECTORY . $img_name, base64_decode($prepared_base64_image));
        // Since we've changed our image we will update the changed image variable to true.
        $this->uploaded_image = true;
        
        return response()->json([
            "image_destination" => '/storage/'. ServicesController::TEMP_DIRECTORY . $img_name
            ]);
     }
     public function deleteTempDirectory() {
        Storage::deleteDirectory(ServicesController::TEMP_DIRECTORY);

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $duration_dropdown = DurationDropdown::all();
        $data = Service::findOrFail($id);
        return view('backend.services.subpages.edit')->withData($data)->withDurationDropdown($duration_dropdown);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /***  Validating Request ***/
        $validatedData = $request->validate([
            'service_name' => 'required',
            'service_chinese_name' => 'required',
            'service_duration' =>'required',
            'service_price' =>'required',
            'short_description' =>'required',
            'detailed_description' =>'required',
        ]);
        $image_file = 'png/' . str_replace(' ', '_',strtolower($request->service_name)) . '.png';
        /***  Updating Values ***/
        $service = Service::findOrFail($id);
        $service->service_name =  $request->service_name;
        $service->service_chinese_name =  $request->service_chinese_name;
        $service->slug =  str_replace(' ','_',strtolower($request->service_name)) ;
        $service->duration =  $request->service_duration;
        $service->service_price =  $request->service_price;
        $service->short_description =  $request->short_description;
        $service->detailed_description =  $request->detailed_description;

        /*** Finish Handling Image ***/ 
        // In order to update the filename when the service name has been changed I've created this statement. If the file has NOT been changed which is determined by the imageUpload function; and the image filename currently exists but the service name has been changed then this statement should run.
        if(Storage::exists($service->image) && $this->uploaded_image === false) {
            // We will backup the current file found in our image directory to the temp folder with the new name in the request.
            Storage::copy($service->image, ServicesController::TEMP_DIRECTORY . $request->service_name);
            // Since we've backuped the file in the temp directory; we will then delete it the old file from the image directory.
            Storage::delete($service->image);
            $service->image = $image_file;
            // Finally, we will copy the file from the temp directory back into the image directory.
            Storage::copy(Storage::allFiles(ServicesController::TEMP_DIRECTORY)[0], $image_file);
        } else {
            // If statement above is false then this can only mean that the file has been changed. We will copy the file in the temp folder and copy it to the image directory.
            Storage::copy(Storage::allFiles(ServicesController::TEMP_DIRECTORY)[0], $image_file);
        }
        $service->save();
        $this->deleteTempDirectory();
        return redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        Storage::delete($service->image);
        $service->delete();
        return redirect('/services');

    }
}
