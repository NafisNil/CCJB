<?php

namespace App\Http\Controllers;

use App\Models\Press;
use Illuminate\Http\Request;
use App\Http\Requests\PressRequest;
use Image;
class PressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $press = Press::orderBy('id', 'desc')->get();
      
        return view('admin.press.index',['press'=>$press]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.press.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PressRequest $request)
    {
        //
        $press = Press::create($request->all());
        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $press);
        }

        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $press);
        }
        return redirect()->route('press.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function show(Press $press)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function edit(Press $press)
    {
        //
        return view('admin.press.edit',[
            'edit' => $press
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function update(PressRequest $request, Press $press)
    {
        //
        $press->update($request->all());
        if ($request->hasFile('file')) {
            @unlink('storage/'.$press->pdf);
            $this->_uploadfile($request, $press);
        }

        if ($request->hasFile('logo')) {
            @unlink('storage/'.$press->logo);
            $this->_uploadImage($request, $press);
        }
        return redirect()->route('press.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function destroy(Press $press)
    {
        //
        if(!empty($press->logo));
        @unlink('storage/'.$press->logo);
        if(!empty($press->file));
        @unlink('storage/'.$press->pdf);
        $press->delete();
        return redirect()->route('press.index')->with('status','Data deleted successfully!');
    }

    private function _uploadfile($request, $notice)
    {
        # code...
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            
                  $request->file->move('storage/',$fileName);

         //  dd($fileName);
            $notice->pdf = $fileName;
            $notice->save();
        }
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1000, 700)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
