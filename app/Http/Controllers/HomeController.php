<?php

namespace App\Http\Controllers;

use App\Models\Partner;
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
            $partner = Partner::all();
            return view('master.index', compact('partner'));
        }
        elseif (Auth::user()->user_role == "partner") {
            return view('partner.index');
        }
        elseif (Auth::user()->user_role == "employee") {
            return view('employee.index');
        }
        elseif (Auth::user()->user_role == "customer") {
            return view('customer.index');
        } else {
            return view('welcome.index');
        }
    }
}
