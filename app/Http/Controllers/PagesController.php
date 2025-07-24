<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{    
    public function index()
    {
        return view('home');
    }

    public function about_us()
    {
        return view('about-us');
    }

    public function contact_us()
    {
        return view('contact-us');
    }   

    public function services()
    {
        return view('services');
    }

    public function mobileapp_services()
    {
        return view('mobile-application-development');
    }

    public function webapp_services()
    {
        return view('web-application-development');
    }

    public function iot_services()
    {
        return view('iot-development');
    }

     public function cloud_services()
    {
        return view('cloud-transformation');
    }
    
}
