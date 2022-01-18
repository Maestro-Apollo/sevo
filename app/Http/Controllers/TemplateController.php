<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('FrontEnd.home');
    }
    public function about_us()
    {
        return view('FrontEnd.about-us');
    }
    public function courses()
    {
        return view('FrontEnd.courses');
    }
    public function courses_details()
    {
        return view('FrontEnd.courses-details');
    }
    public function instructors()
    {
        return view('FrontEnd.instructors');
    }
    public function contact_us()
    {
        return view('FrontEnd.contact-us');
    }
    public function login()
    {
        return view('FrontEnd.login');
    }

    //
}