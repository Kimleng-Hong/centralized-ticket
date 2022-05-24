<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        if(Auth::user()->user_role == 'master') {
            $user->user_role = 'partner';
        } elseif(Auth::user()->user_role == 'partner') {
            $user->user_role = 'employee';
        }
        $user->registered_id = Auth::id();
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /* ====================================== Partner ========================================== */
    public function index_partner()
    {
        //
    }

    public function create_partner()
    {
        return view('master.partner.create-partner');
    }

    public function store_partner(Request $request)
    {
        //
    }

    public function show_partner($id)
    {
        //
    }

    public function edit_partner($id)
    {
        //
    }

    public function update_partner(Request $request, $id)
    {
        //
    }

    public function destroy_partner($id)
    {
        //
    }

    /* ====================================== Employee ========================================== */
    public function index_employee()
    {
        //
    }

    public function create_employee()
    {
        return view('master.partner.create-partner');
    }

    public function store_employee(Request $request)
    {
        //
    }

    public function show_employee($id)
    {
        //
    }

    public function edit_employee($id)
    {
        //
    }

    public function update_employee(Request $request, $id)
    {
        //
    }

    public function destroy_employee($id)
    {
        //
    }

    /* ====================================== Customer ========================================== */
    public function index_customer()
    {
        //
    }

    public function create_customer()
    {
        return view('master.partner.create-partner');
    }

    public function store_customer(Request $request)
    {
        //
    }

    public function show_customer($id)
    {
        //
    }

    public function edit_customer($id)
    {
        //
    }

    public function update_customer(Request $request, $id)
    {
        //
    }

    public function destroy_customer($id)
    {
        //
    }
}
