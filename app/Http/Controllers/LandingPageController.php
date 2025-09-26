<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Menampilkan halaman landing.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('landing');
    }
}
