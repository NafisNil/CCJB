<?php

namespace App\Http\Controllers;

use App\Models\Other;
use Illuminate\Http\Request;
use App\Http\Requests\OtherRequest;
use Image;
class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $other = Other::orderBy('id', 'desc')->get();
      
        return view('admin.other.index',['other'=>$other]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.other.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OtherRequest $request)
    {
        //
        $other = Other::create($request->all());
        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $other);
        }

        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $other);
        }
        return redirect()->route('other.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(Other $other)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(Other $other)
    {
        //
        return view('admin.other.edit',[
            'edit' => $other
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(OtherRequest $request, Other $other)
    {
        //
        $other->update($request->all());
        if ($request->hasFile('file')) {
            @unlink('storage/'.$other->pdf);
            $this->_uploadfile($request, $other);
        }

        if ($request->hasFile('logo')) {
            @unlink('storage/'.$other->logo);
            $this->_uploadImage($request, $other);
        }
        return redirect()->route('other.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other $other)
    {
        //
        if(!empty($other->logo));
        @unlink('storage/'.$other->logo);
        if(!empty($other->file));
        @unlink('storage/'.$other->pdf);
        $other->delete();
        return redirect()->route('other.index')->with('status','Data deleted successfully!');
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
