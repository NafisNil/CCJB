<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use Image;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $book = Book::orderBy('id', 'desc')->get();
      
        return view('admin.book.index',['book'=>$book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        //
        $book = Book::create($request->all());
        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $book);
        }

        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $book);
        }
        return redirect()->route('book.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('admin.book.edit',[
            'edit' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Book $book)
    {
        //
        $book->update($request->all());
        if ($request->hasFile('file')) {
            @unlink('storage/'.$book->pdf);
            $this->_uploadfile($request, $book);
        }

        if ($request->hasFile('logo')) {
            @unlink('storage/'.$book->logo);
            $this->_uploadImage($request, $handbook);
        }
        return redirect()->route('book.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        if(!empty($book->logo));
        @unlink('storage/'.$book->logo);
        if(!empty($book->file));
        @unlink('storage/'.$book->pdf);
        $book->delete();
        return redirect()->route('book.index')->with('status','Data deleted successfully!');
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
