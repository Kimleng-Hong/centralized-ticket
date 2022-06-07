<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Location;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('master.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.create');
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
        $user->user_role = 'master';
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/home')->with('status', 'Welcome Master!');
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
    
    public function setup()
    {
        $industry = Industry::all();
        $location = Location::all();
        return view('master.setup', compact('industry', 'location'));
    }

    /* ====================================== Industry ========================================== */
    public function create_industry()
    {
        return view('master.industry.create-industry');
    }
    public function store_industry(Request $request)
    {
        $industry = new Industry;
        $industry->name = $request->input('industry_name');
        $industry->save();
        return redirect('/setup-master')->with('status', 'Your action is completed successfully!');
    }
    public function edit_industry($id)
    {
        $industry = Industry::find($id);
        return view('master.industry.edit-industry', compact('industry'));
    }
    public function update_industry(Request $request, $id)
    {
        $industry = Industry::find($id);
        $industry->name = $request->input('industry_name');
        $industry->update();
        return redirect('/setup-master')->with('status', 'Your action is completed successfully!');
    }
    /* ====================================== Location ========================================== */
    public function create_location()
    {
        return view('master.location.create-location');
    }
    public function store_location(Request $request)
    {
        $location = new Location;
        $location->name = $request->input('location_name');
        $location->save();
        return redirect('/setup-master')->with('status', 'Your action is completed successfully!');
    }
    public function edit_location($id)
    {
        $location = Location::find($id);
        return view('master.location.edit-location', compact('location'));
    }
    public function update_location(Request $request, $id)
    {
        $location = Location::find($id);
        $location->name = $request->input('location_name');
        $location->update();
        return redirect('/setup-master')->with('status', 'Your action is completed successfully!');
    }
    /* ======================================================================================== */
    
}
