<?php

namespace App\Http\Controllers;

use App\Models\Activityimg;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\ActivityimgRequest;
use App\Models\Wedo;
class ActivityimgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activityimg = Activityimg::orderBy('id', 'desc')->get();
        $wedo = Wedo::orderBy('id','desc')->get();
        return view('admin.activityimg.index',['activityimg'=>$activityimg, 'wedo' => $wedo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $wedo = Wedo::orderBy('id','desc')->get();
        return view('admin.activityimg.create',['wedo' => $wedo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivityimgRequest $request)
    {
        //
        $activityimg = Activityimg::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $activityimg);
        }
        return redirect()->route('activityimg.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activityimg  $activityimg
     * @return \Illuminate\Http\Response
     */
    public function show(Activityimg $activityimg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activityimg  $activityimg
     * @return \Illuminate\Http\Response
     */
    public function edit(Activityimg $activityimg)
    {
        //
        $wedo = Wedo::orderBy('id','desc')->get();
        return view('admin.activityimg.edit',[
            'edit' => $activityimg,
            'wedo' => $wedo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activityimg  $activityimg
     * @return \Illuminate\Http\Response
     */
    public function update(ActivityimgRequest $request, Activityimg $activityimg)
    {
        //
        $activityimg->update($request->all());
       
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$team->logo);
            $this->_uploadImage($request, $activityimg);
        }
        return redirect()->route('activityimg.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activityimg  $activityimg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activityimg $activityimg)
    {
        //
        if(!empty($activityimg->logo));
        @unlink('storage/'.$activityimg->logo);
       
        $activityimg->delete();
        return redirect()->route('activityimg.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(390, 390)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
