<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->user_role == "master") {
            // return view('');
        }
        elseif (Auth::user()->user_role == "company") {
            // return view('');
        }
        elseif (Auth::user()->user_role == "employee") {
            // return view('');
        }
        elseif (Auth::user()->user_role == "customer") {
            return view('customer-layouts.index');
        }
    }
}
