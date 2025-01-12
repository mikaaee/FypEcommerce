<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home'); //  home.blade.php is diplay when admin logged in same goes when click dashboard
    }
}
