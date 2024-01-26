<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use App\Models\Classroom;
use App\Models\Teacher;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    // function home(){
    //     return view('home');
    // }
    public function testHome()
    {
        $testimonials=Testimonial::where('published',true)->latest()->take(3)->get(); //load data in testimonials variable
        $teachers=Teacher::where('published',true)->latest()->take(3)->get(); //load data in testimonials variable
        $classes=Classroom::where('published',true)->latest()->take(3)->get(); //load data in testimonials variable
        // return view('home',compact('teachers'));
        return view('index', compact('testimonials','teachers','classes')); //send data into testimonial blade file
    }
    function about(){
        return view('about');
    }
    function appointment(){
        return view('appointment');
    }
    function classes(){
        $testimonials=Testimonial::where('published',true)->latest()->take(3)->get(); //load data in testimonials variable
        return view('classes',compact('testimonials'));
    }
    function callToAction(){
        return view('callToAction');
    }
    function facilities(){
        return view('facilities');
    }
    //to home page
    // function team(){
    //     $teachers=Teacher::where('published',true)->latest()->take(3)->get(); //load data in testimonials variable
    //     return view('home',compact('teachers'));

    // }
    // function testimonial(){
    //     return view('testimonial');
    // }
    function contact(){
        return view('contact');
    }
    function __invoke(){
        return view('404');
    }
}
