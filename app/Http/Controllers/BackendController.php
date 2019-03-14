<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\ServicesController;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function services()
    {
        $service = new ServicesController;
        $data = $service->index();
        return view('backend.services.services_page')->withData($data);
    }
    public function services_post()
    {
        return view('backend.services.subpages.post_service');
    }
}
