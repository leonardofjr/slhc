<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\HoursOfOperation;
use App\User;
use Auth;
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);
        $setting = $user->settings->first();
        $hoursOfOperation = $user->hoursOfOperations;
        
        return view('backend.settings.settings_page')->withData($setting)->withHoursOfOperation($hoursOfOperation);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $setting = Setting::firstOrFail();
        $hours_of_operation = HoursOfOperation::all();
        forEach( $hours_of_operation as $key => $item) {
            $item->start = $request->start[$key];
            $item->end = $request->end[$key];
            $item->save();
        }
        $setting->business_name = $request->business_name;
        $setting->business_phone = $request->business_phone;
        $setting->business_email = $request->business_email;
        $setting->save();
        return redirect('/settings');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
