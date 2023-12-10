<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\AnnouncementRequest;
use Image;
class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $announcement = Announcement::orderBy('id', 'desc')->get();
      
        return view('admin.announcement.index',['announcement'=>$announcement]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementRequest $request)
    {
        //
        $announcement = Announcement::create($request->all());
        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $announcement);
        }

        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $announcement);
        }
        return redirect()->route('announcement.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
        return view('admin.announcement.edit',[
            'edit' => $announcement
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(AnnouncementRequest $request, Announcement $announcement)
    {
        //
        $announcement->update($request->all());
       
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$announcement->logo);
            $this->_uploadImage($request, $announcement);
        }
        return redirect()->route('announcement.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        //
        if(!empty($announcement->logo));
        @unlink('storage/'.$announcement->logo);
       
        $announcement->delete();
        return redirect()->route('announcement.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 300)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
