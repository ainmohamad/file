<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
    	return view('pages.about');
    }

    public function profile()
    {
    	return view('pages.profile');
    }

    public function organizerdashboard()
    {
    	return view('pages.organizerdashboard');
    }

    public function admindashboard()
    {
    	return view('pages.admindashboard');
    }
}
