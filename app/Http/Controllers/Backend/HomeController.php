<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function slider()
    {
        return view('backend.home_page.slider');
    }

    public function information()
    {
        return view('backend.home_page.information');
    }

    public function footer()
    {
        return view('backend.home_page.footer');
    }
}
