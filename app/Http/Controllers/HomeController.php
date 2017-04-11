<?php

namespace App\Http\Controllers;
use App\Card;
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
    public function index()
    {
         $cards = Card::inRandomOrder()->take(3)->get();
        
        return view('home', compact('cards'));
    }
}
