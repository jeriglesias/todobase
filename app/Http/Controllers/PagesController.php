<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages/index');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function services()
    {
        $services = array('Web development', 'Web design', 'Website SEO');
        return view('pages/services', compact('services'));
    }

}
