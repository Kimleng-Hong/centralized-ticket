<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Industry;
use App\Models\Location;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/create-partner')->with('status', 'Please provide the necessary information below');
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
        $industry = Industry::all();
        $location = Location::all();
        return view('master.partner.create-partner', compact('industry', 'location'));
    }

    public function store_partner(Request $request)
    {
        $partner = new Partner;
        $user = DB::table('users')->latest()->first();
        
        $partner->user_id = $user->id;
        $partner->name = $request->input('company_name');
        $partner->description = $request->input('company_description');
        $partner->industry = $request->input('company_industry');
        $partner->location = $request->input('company_location');
        $partner->address = $request->input('company_address');
        $partner->facebook = $request->input('company_facebook');
        $partner->instagram = $request->input('company_instagram');
        $partner->linkedin = $request->input('company_linkedin');
        $partner->save();

        return redirect('/index-master')->with('status', 'Your registration is completed!');
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
        // return view('master.partner.create-partner');
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
        return view('customer.create');
    }

    public function store_customer(Request $request)
    {
        $customer = new Customer;
        $customer->user_id = Auth::id();
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->save();

        return redirect('/home')->with('status', 'Your registration is completed!');
    }

    public function show_customer($id)
    {
        $customer = User::find($id);
        return view('customer.show', compact('customer'));
    }

    public function edit_customer($id)
    {
        $customer = User::find($id);
        return view('customer.edit', compact('customer'));
    }

    public function update_customer(Request $request, $id)
    {
        $customer = User::find($id);
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->update();
        return redirect('/show-customer/{id}')->with('status', 'Edit Successfully!');
    }

    public function destroy_customer($id)
    {
        //
    }
}
