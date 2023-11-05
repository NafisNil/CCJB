<?php

namespace App\Http\Controllers;

use App\Models\Bookchapter;
use Illuminate\Http\Request;
use App\Http\Requests\BookchapterRequest;
use Image;
class BookchapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bookchapter = Bookchapter::orderBy('id', 'desc')->get();
      
        return view('admin.bookchapter.index',['bookchapter'=>$bookchapter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.bookchapter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookchapterRequest $request)
    {
        //
        $bookchapter = Bookchapter::create($request->all());
        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $bookchapter);
        }

        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $bookchapter);
        }
        return redirect()->route('bookchapter.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookchapter  $bookchapter
     * @return \Illuminate\Http\Response
     */
    public function show(Bookchapter $bookchapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookchapter  $bookchapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookchapter $bookchapter)
    {
        //
        return view('admin.bookchapter.edit',[
            'edit' => $bookchapter
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookchapter  $bookchapter
     * @return \Illuminate\Http\Response
     */
    public function update(BookchapterRequest $request, Bookchapter $bookchapter)
    {
        //
        $bookchapter->update($request->all());
        if ($request->hasFile('file')) {
            @unlink('storage/'.$bookchapter->pdf);
            $this->_uploadfile($request, $bookchapter);
        }

        if ($request->hasFile('logo')) {
            @unlink('storage/'.$bookchapter->logo);
            $this->_uploadImage($request, $bookchapter);
        }
        return redirect()->route('bookchapter.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookchapter  $bookchapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookchapter $bookchapter)
    {
        //
        if(!empty($bookchapter->logo));
        @unlink('storage/'.$bookchapter->logo);
        if(!empty($bookchapter->file));
        @unlink('storage/'.$bookchapter->pdf);
        $bookchapter->delete();
        return redirect()->route('bookchapter.index')->with('status','Data deleted successfully!');
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
