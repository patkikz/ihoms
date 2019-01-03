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

    public function services()
    {   
        $data = array
        (
            'title' => 'Services',
            'contents' => ['H.O Master File','Monthly Dues','Payment Management',
                        'Car Sticker','Clubhouse Reservation','Expenses','File Management']
        ); 
        return view('pages.services')->with($data);
    }
}
