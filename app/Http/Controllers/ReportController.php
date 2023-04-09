<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Requests\ReportRequest;
use Image;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $report = Report::orderBy('id', 'desc')->get();
      
         return view('admin.report.index',['report'=>$report]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        //
        $report = Report::create($request->all());
        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $report);
        }

        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $report);
        }
        return redirect()->route('report.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
        return view('admin.report.edit',[
            'edit' => $report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(ReportRequest $request, Report $report)
    {
        //

        $report->update($request->all());
        if ($request->hasFile('file')) {
            @unlink('storage/'.$report->pdf);
            $this->_uploadfile($request, $report);
        }

        if ($request->hasFile('logo')) {
            @unlink('storage/'.$report->logo);
            $this->_uploadImage($request, $report);
        }
        return redirect()->route('report.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
        if(!empty($report->logo));
        @unlink('storage/'.$report->logo);
        if(!empty($report->file));
        @unlink('storage/'.$report->pdf);
        $report->delete();
        return redirect()->route('report.index')->with('status','Data deleted successfully!');
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
