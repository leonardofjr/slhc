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
        $encoded_image = $request->input('image');
        // Preparing to decode base64 image file 
        $img_array = explode(';', $encoded_image);
        $img_array_2 = explode(',', $img_array[1]);

        Storage::put('file' . '.png', base64_decode($img_array_2[1]));

        return response()->json($img_array_2);


        // Validating Request
    /*
        $validatedData = $request->validate([
            'service_name' => 'required',
            'service_duration' =>'required',
            'service_price' =>'required',
            'short_description' =>'required',
            'detailed_description' =>'required',
        ]);

        $service = new Service();
        $service->service_name =  $request->service_name;
        $service->slug =  str_replace(' ','_',strtolower($request->service_name));
        $service->duration =  $request->service_duration;
        $service->service_price =  $request->service_price;
        $service->short_description =  $request->short_description;
        $service->detailed_description =  $request->detailed_description;

        $service->save(); 
        return redirect('/services');   */
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
        $data = Service::findOrFail($id);
        return view('backend.services.subpages.edit')->withData($data);
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
            'service_duration' =>'required',
            'service_price' =>'required',
            'short_description' =>'required',
            'detailed_description' =>'required',
        ]);

        $service = Service::findOrFail($id);
        $service->service_name =  $request->service_name;
        $service->slug =  str_replace(' ','_',strtolower($request->service_name)) ;
        $service->duration =  $request->service_duration;
        $service->service_price =  $request->service_price;
        $service->short_description =  $request->short_description;
        $service->detailed_description =  $request->detailed_description;
        $service->save();
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
        $service->delete();
        return redirect('/services');

    }
}
