<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
class ServicesController extends Controller
{

    public function getAll()
    {
        $services = Service::all();

        return response()->json($services);
    }
    public function getOne($slug)
    {

        $service = Service::where('slug', $slug)->first();
        return response()->json($service);
    }


}
