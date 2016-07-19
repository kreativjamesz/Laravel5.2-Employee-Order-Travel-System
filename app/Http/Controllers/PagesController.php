<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function partners()
    {
        return view('partners');
    }
    public function courses()
    {
    	return view('courses');
    }
    
    public function contact()
    {
    	return view('contact');
    }
}
