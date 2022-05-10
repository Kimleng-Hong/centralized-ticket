<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industry = Industry::all();
        return view('master.index', compact('industry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function add_industry()
    {
        return view('master.add-industry');
    }
    public function store_industry(Request $request)
    {
        $industry = new Industry;
        $industry->name = $request->input('industry_name');
        $industry->save();
        return redirect('/index-master')->with('status', 'Your action is completed successfully!');
    }
    public function edit_industry($id)
    {
        $industry = Industry::find($id);
        return view('master.edit-industry', compact('industry'));
    }
    // public function update_industry(Request $request, $id)
    // {
    //     $industry = Industry::find($id);
    //     $industry->name = $request->input('industry_name');
    //     $industry->update();
    //     return redirect('/index-master')->with('status', 'Your action is completed successfully!');
    // }
    
}
