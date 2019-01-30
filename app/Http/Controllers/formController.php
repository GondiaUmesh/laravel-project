<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\form;
use App\User;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = \App\form::all();
return view('books')->with('allbooks',$books );
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}    public function borrow()
    {
         $bookss = form::all()->toArray();
        return View('borrow', compact('bookss'));
    }

    public function create()
    {
        return view('create');
    }

    public function users()
    {
        $users = User::all()->toArray();
        return view('members', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
        'Book_name' => 'required',
        'Author' => 'required',
        'categories' => 'required',
    ]);
        $cover = $request->file('bookcover');
    $extension = $cover->getClientOriginalExtension();

    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
    $books=new \App\form();
    $books->Book_name=request('Book_name');
    $books->Author=request('Author');
    $books->categories=request('categories');
    $books->mime=$cover->getClientMimeType();
    
    
    $books->original_filename = $cover->getClientOriginalName();
    $books->filename = $cover->getFilename().'.'.$extension;
        $books->save();
        return redirect('/books')->with('success' , 'data added ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
