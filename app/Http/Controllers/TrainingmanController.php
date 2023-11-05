<?php

namespace App\Http\Controllers;

use App\Models\Trainingman;
use Illuminate\Http\Request;
use App\Http\Requests\TrainingmanRequest;
use Image;
class TrainingmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainingman = Trainingman::orderBy('id', 'desc')->get();
      
         return view('admin.trainingman.index',['trainingman'=>$trainingman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.trainingman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingmanRequest $request)
    {
        //
        $trainingman = Trainingman::create($request->all());
        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $trainingman);
        }

        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $trainingman);
        }
        return redirect()->route('trainingman.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainingman  $trainingman
     * @return \Illuminate\Http\Response
     */
    public function show(Trainingman $trainingman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainingman  $trainingman
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainingman $trainingman)
    {
        //
        return view('admin.trainingman.edit',[
            'edit' => $trainingman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainingman  $trainingman
     * @return \Illuminate\Http\Response
     */
    public function update(TrainingmanRequest $request, Trainingman $trainingman)
    {
        //
        $trainingman->update($request->all());
        if ($request->hasFile('file')) {
            @unlink('storage/'.$trainingman->pdf);
            $this->_uploadfile($request, $trainingman);
        }

        if ($request->hasFile('logo')) {
            @unlink('storage/'.$trainingman->logo);
            $this->_uploadImage($request, $trainingman);
        }
        return redirect()->route('trainingman.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainingman  $trainingman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainingman $trainingman)
    {
        //
        if(!empty($trainingman->logo));
        @unlink('storage/'.$trainingman->logo);
        if(!empty($trainingman->file));
        @unlink('storage/'.$trainingman->pdf);
        $trainingman->delete();
        return redirect()->route('trainingman.index')->with('status','Data deleted successfully!');
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
