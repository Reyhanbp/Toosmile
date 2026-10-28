<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }
    public function layanan()
    {
        return view('pages.frontend.layanan');
    }
    public function dokter()
    {
        return view('pages.frontend.dokter');
    }
    public function artikel()
    {
        return view('pages.frontend.artikel');
    }
    public function promosi()
    {
        return view('pages.frontend.promosi');
    }
    public function ulasan()
    {
        return view('pages.frontend.ulasan');
    }
    public function about()
    {
        return view('pages.frontend.about');
    }
    public function booking()
    {
        return view('pages.frontend.booking');
    }
}
