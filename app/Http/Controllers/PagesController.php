<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to iHOMS !';
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function company()
    {
        $title = ' ';
        return view('pages.company', compact('title'));
    }

    public function contact()
    {
        $title = ' ';
        return view('pages.contact', compact('title'));
    }

}
