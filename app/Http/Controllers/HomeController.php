<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        $articles = Artikel::take(9)->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('articles'));
    }
}
