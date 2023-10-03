<?php

namespace App\Http\Controllers;

use App\Models\Wedo;
use Illuminate\Http\Request;
use App\Http\Requests\WedoRequest;
class WedoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wedo = Wedo::orderBy('id', 'desc')->get();
      
        return view('admin.wedo.index',['wedo'=>$wedo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.wedo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WedoRequest $request)
    {
        //
        $wedo = Wedo::create($request->all());
       
       
        return redirect()->route('wedo.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wedo  $wedo
     * @return \Illuminate\Http\Response
     */
    public function show(Wedo $wedo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wedo  $wedo
     * @return \Illuminate\Http\Response
     */
    public function edit(Wedo $wedo)
    {
        //
        return view('admin.wedo.edit',[
            'edit' => $wedo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wedo  $wedo
     * @return \Illuminate\Http\Response
     */
    public function update(WedoRequest $request, Wedo $wedo)
    {
        //
        $wedo->update($request->all());
       

        return redirect()->route('wedo.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wedo  $wedo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wedo $wedo)
    {
        //
        $wedo->delete();
        return redirect()->route('wedo.index')->with('status','Data deleted successfully!');
    }
}
