<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('welcome.index', compact('user'));
    }

    public function about()
    {
        $user = User::all();
        return view('welcome.about', compact('user'));
    }

    public function contact()
    {
        $user = User::all();
        return view('welcome.contact', compact('user'));
    }
}
