<?php

namespace App\Http\Controllers;

use App\Models\Whatwedo;
use Illuminate\Http\Request;
use App\Http\Requests\WhatwedoRequest;
use Image;
class WhatwedoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                //
                $whatwedo = Whatwedo::orderBy('id', 'desc')->first();
                $whatwedoCount = Whatwedo::count();
                 return view('admin.whatwedo.index',['whatwedo'=>$whatwedo,'whatwedoCount'=> $whatwedoCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.whatwedo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WhatwedoRequest $request)
    {
        //
        $whatwedo = Whatwedo::create($request->all());
   
        return redirect()->route('whatwedo.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Whatwedo  $whatwedo
     * @return \Illuminate\Http\Response
     */
    public function show(Whatwedo $whatwedo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Whatwedo  $whatwedo
     * @return \Illuminate\Http\Response
     */
    public function edit(Whatwedo $whatwedo)
    {
        //
        return view('admin.whatwedo.edit',[
            'edit' => $whatwedo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Whatwedo  $whatwedo
     * @return \Illuminate\Http\Response
     */
    public function update(WhatwedoRequest $request, Whatwedo $whatwedo)
    {
        //
        $whatwedo->update($request->all());
       
  
        return redirect()->route('whatwedo.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Whatwedo  $whatwedo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whatwedo $whatwedo)
    {
        //
        $whatwedo->delete();
        return redirect()->route('whatwedo.index')->with('status','Data deleted successfully!');
    }
}
