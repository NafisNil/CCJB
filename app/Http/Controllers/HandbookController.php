<?php

namespace App\Http\Controllers;

use App\Models\Handbook;
use Illuminate\Http\Request;
use App\Http\Requests\HandbookRequest;
use Image;
class HandbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $handbook = Handbook::orderBy('id', 'desc')->get();
      
        return view('admin.handbook.index',['handbook'=>$handbook]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.handbook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HandbookRequest $request)
    {
        //
        $handbook = Handbook::create($request->all());
        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $handbook);
        }

        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $handbook);
        }
        return redirect()->route('handbook.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Handbook  $handbook
     * @return \Illuminate\Http\Response
     */
    public function show(Handbook $handbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Handbook  $handbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Handbook $handbook)
    {
        //
        return view('admin.handbook.edit',[
            'edit' => $handbook
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Handbook  $handbook
     * @return \Illuminate\Http\Response
     */
    public function update(HandbookRequest $request, Handbook $handbook)
    {
        //
        $handbook->update($request->all());
        if ($request->hasFile('file')) {
            @unlink('storage/'.$handbook->pdf);
            $this->_uploadfile($request, $handbook);
        }

        if ($request->hasFile('logo')) {
            @unlink('storage/'.$handbook->logo);
            $this->_uploadImage($request, $handbook);
        }
        return redirect()->route('handbook.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Handbook  $handbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Handbook $handbook)
    {
        //
        if(!empty($handbook->logo));
        @unlink('storage/'.$handbook->logo);
        if(!empty($handbook->file));
        @unlink('storage/'.$handbook->pdf);
        $handbook->delete();
        return redirect()->route('handbook.index')->with('status','Data deleted successfully!');
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
