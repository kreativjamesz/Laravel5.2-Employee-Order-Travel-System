<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() { return view('dashboard.home'); }
    public function widgets() { return view('widgets.index'); }
    
    public function charts() { return view('charts'); }
    public function tables() { return view('tables'); }
    public function forms() { return view('forms'); }
    public function grid() { return view('grid'); }
    public function buttons() { return view('buttons'); }
    public function icons() { return view('icons'); }
    public function panels() { return view('panels'); }
    public function typography() { return view('typography'); }
    public function notifications() { return view('notification'); }
    public function blank() { return view('blank'); }
    public function login() { return view('login'); }
    public function documentation() { return view('documentation'); }

}
