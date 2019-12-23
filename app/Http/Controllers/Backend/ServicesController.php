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
    private $temp_directory = 'temp/';


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

        $image_file = 'png/' . str_replace(' ', '_', $request->service_name) . '.png';

        $service = new Service();
        $service->service_name =  $request->service_name;
        $service->service_chinese_name =  $request->service_chinese_name;
        $service->slug =  str_replace(' ','_',strtolower($request->service_name));
        $service->image = $image_file;
        $service->duration =  $request->service_duration;
        $service->service_price =  $request->service_price;
        $service->short_description =  $request->short_description;
        $service->detailed_description =  $request->detailed_description;
        // Handle Image 
        $temp_file_location = Storage::disk('public')->allFiles('temp/')[0];
        $copy_file = Storage::disk('public')->copy($temp_file_location, $image_file);
        // Saving 
        $service->save(); 
        return redirect('/services');  
     }

     public function uploadImage(Request $request) 
     {
        $encoded_image = $request->input('image');
        $img_name = time() . '.png';
        // Preparing to decode base64 image file
        $img_array = explode(';', $encoded_image);
        $img_array_2 = explode(',', $img_array[1]);
        $this->deleteTempDirectory();
        Storage::disk('public')->put($this->temp_directory . $img_name, base64_decode($img_array_2[1]));
        return response()->json(["image_destination" => '/storage/'. $this->temp_directory . $img_name]);
     }
     public function deleteTempDirectory() {
        Storage::disk('public')->deleteDirectory($this->temp_directory);

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
        // Validating Request
        $validatedData = $request->validate([
            'service_name' => 'required',
            'service_chinese_name' => 'required',
            'service_duration' =>'required',
            'service_price' =>'required',
            'short_description' =>'required',
            'detailed_description' =>'required',
        ]);
        $image_file = 'png/' . str_replace(' ', '_', $request->service_name) . '.png';
        $service = Service::findOrFail($id);
        $service->service_name =  $request->service_name;
        $service->service_chinese_name =  $request->service_chinese_name;
        $service->slug =  str_replace(' ','_',strtolower($request->service_name)) ;
        $service->duration =  $request->service_duration;
        $service->service_price =  $request->service_price;
        $service->short_description =  $request->short_description;
        $service->detailed_description =  $request->detailed_description;
        // Handle Image 
        if (Storage::disk('public')->exists($image_file)) {
            Storage::disk('public')->delete($image_file);
        }
        Storage::disk('public')->delete($service->image);
        $service->image = $image_file;
        $temp_file_location = Storage::disk('public')->allFiles('temp/')[0];
        $copy_file = Storage::disk('public')->copy($temp_file_location, $image_file);
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
        Storage::disk('public')->delete($service->image);
        $service->delete();
        return redirect('/services');

    }
}
