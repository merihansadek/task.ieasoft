<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
   
  
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function services()
    {
        return view('services');
    }
    public function gallery()
    {
        return view('gallery');
    }
     public function category()
    {
        return view('category');
    }
   
}

