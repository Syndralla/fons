<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Person;


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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $persons = Person::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard')->with('persons', $persons);
    }
}
