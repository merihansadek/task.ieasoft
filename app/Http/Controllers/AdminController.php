<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;

class AdminController extends Controller
{
    public function store() {
        $name=  Request::get('name');
        $password=  Request::get('password');
        if ($name=="laravel"&&$password=="laravel")
        {
            return view('welcome',compact('name'));
        }
        else 
        {
           
           return redirect()->back();
            
        }

        
        
    }
}
