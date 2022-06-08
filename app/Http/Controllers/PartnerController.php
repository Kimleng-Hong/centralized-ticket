<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Partner;
use App\Models\Industry;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('partner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::find($id);
        $industry = Industry::all();
        $location = Location::all();
        return view('partner.create', compact('user', 'industry', 'location'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $users = User::find($id);
        $partners = new Partner;
        
        $users->partner_requesting = 'Checking';

        $partners->user_id = $users->id;
        $partners->name = $request->input('company_name');
        $partners->description = $request->input('company_description');
        $partners->industry = $request->input('company_industry');
        $partners->location = $request->input('company_location');
        $partners->address = $request->input('company_address');
        $partners->facebook = $request->input('company_facebook');
        $partners->instagram = $request->input('company_instagram');
        $partners->linkedin = $request->input('company_linkedin');

        $users->save();
        $partners->save();
        return redirect('/home')->with('status', 'Your registration is completed! Please wait for admin approval.');
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

    public function request()
    {   
        $users = User::all();
        return view('master.request-partner', compact('users'));
    }

    public function approve(Request $request, $id)
    {
        $users = User::find($id);
        $users->user_role = "partner";
        $users->partner_requesting = $request->input('partner_requesting');
        $users->update();

        return Redirect::back()->with('status','Operation Successful!');
    }

    public function deny(Request $request, $id)
    {
        $users = User::find($id);
        $users->partner_requesting = $request->input('partner_requesting');
        $users->update();

        return Redirect::back()->with('status','Operation Successful!');
    }
}
