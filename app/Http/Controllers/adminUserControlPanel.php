<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminUserControlPanel extends Controller
{
    public function getUserPanelPage() {
        return view('backend.pages.user-panel');
    }
}
