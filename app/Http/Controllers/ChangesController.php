<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\Http\Requests;

class ChangesController extends Controller
{
    public function index() {
        $change = \App\Change::all();
        return view ('changes.index', compact('change'));
        
    }
    public function store() {
        $change= new \App\Change;
        $change->slider_image_1=Request::get('slider_image_1');
        if($change->slider_image_1==NULL)
        {
            $change->slider_image_1="images/1.jpg";
        }
        $change->slider_image_2=Request::get('slider_image_2');
         if($change->slider_image_2==NULL)
        {
            $change->slider_image_2="images/2.jpg";
        }
        $change->slider_image_3=Request::get('slider_image_3');
         if($change->slider_image_3==NULL)
        {
            $change->slider_image_3="images/3.jpg";
        }
        $change->footer_1=Request::get('footer_1');
         if($change->footer_1==NULL)
        {
            $change->footer_1="fa fa-facebook";
        }
        $change->footer_2=Request::get('footer_2');
         if($change->footer_2==NULL)
        {
            $change->footer_2="fa fa-twitter";
        }
        $change->footer_3=Request::get('footer_3');
         if($change->footer_3==NULL)
        {
            $change->footer_3="fa fa-google-plus";
        }
        $change->footer_4=Request::get('footer_4');
         if($change->footer_4==NULL)
        {
            $change->footer_4="fa fa-instagram";
        }
        $change->footer_5=Request::get('footer_5');
         if($change->footer_5==NULL)
        {
            $change->footer_5="fa fa-youtube";
        }
        $change->footer_6=Request::get('footer_6');
         if($change->footer_6==NULL)
        {
            $change->footer_6="fa fa-pinterest";
        }
        $change->footer_7=Request::get('footer_7');
         if($change->footer_7==NULL)
        {
            $change->footer_7="fa fa-behance";
        }
        $change->footer_8=Request::get('footer_8');
         if($change->footer_8==NULL)
        {
            $change->footer_8="fa fa-vime";
        }
        $change->contact_mail=Request::get('contact_mail');
         if($change->contact_mail==NULL)
        {
            $change->contact_mail=="Info@pmstu.com";
        }
        $change->contact_phone=Request::get('contact_phone');
         if($change->contact_phone==NULL)
        {
            $change->contact_phone=="0123456789";
        }
        $change->save();
        $id=$change->id;
      
       return redirect('/changes/'.$id);

 }
    public function show($id)
    {
        $change= \App\Change::findorfail($id);
        return view('changes.index' ,compact('change'));
    }
     
}
