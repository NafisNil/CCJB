<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\GeneralRequest;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $general = General::orderBy('id', 'desc')->first();
        $generalCount = General::count();
         return view('admin.general.index',['general'=>$general,'generalCount'=> $generalCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.general.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralRequest $request)
    {
        //
        $general = General::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $general);
        }
        return redirect()->route('general.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit(General $general)
    {
        //
        return view('admin.general.edit',[
            'edit' => $general
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, General $general)
    {
        //
        $general->update($request->all());
       
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$general->logo);
            $this->_uploadImage($request, $general);
        }
        return redirect()->route('general.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        //
        if(!empty($general->logo));
        @unlink('storage/'.$general->logo);

        $general->delete();
        return redirect()->route('general.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(64, 64)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
