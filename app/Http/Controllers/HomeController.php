<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    // public function index2()
    // {
    //     return view('index2');
    // }    
    // public function index3()
    // {
    //     return view('index3');
    // }  
    public function about()
    {
        return view('about');
    } 
   
   
    public function contact()
    {
        return view('contact');
    }       
    public function faq()
    {
        return view('faq');
    }  
  
    public function project()
    {
        return view('project');
    } 
    public function projectdetails()
    {
        return view('projectdetails');
    } 
    public function testimonial()
    {
        return view('testimonial');
    } 
    public function service()
    {
        return view('service');
    } 
    public function servicedetails()
    {
        return view('servicedetails');
    } 
    public function serviceCybersecurity()
    {
        return view('servicedetails-cybersecurity');
    } 
      public function serviceagenticai()
    {
        return view('servicedetails-agenticai');
    } 
      public function servicedigital()
    {
        return view('servicedetails-digital');
    } 
    public function servicewebdev()
    {
        return view('servicedetails-webdev');
    } 
    public function serviceappdev()
    {
        return view('servicedetails-appdev');
    }
    public function serviceerp()
    {
        return view('servicedetails-erp');
    }
    public function servicerobotic()
    {
        return view('servicedetails-robotic');
    }
    public function servicedata()
    {
        return view('servicedetails-data');
    }
  
    public function team()
    {
        return view('team');
    } 
     public function teamdetails()
    {
        return view('teamdetails');
    }    


}
