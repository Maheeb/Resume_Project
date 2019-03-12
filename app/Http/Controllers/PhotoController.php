<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photos = Photo::all();
        return view('admin.Photos.pic',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $photos = Photo::all();

        return view('admin.Photos.create',compact('photos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $inputs = $request->all();
        if ( $request->hasFile('file')){
            if ($request->file('file')->isValid()){
                $file = $request->file('file');
                $name = $file->getClientOriginalName();
                $file->move('images' , $name);
                //$inputs = $request->all();
                $inputs['file'] = $name;
            }
        }
        Photo::create($inputs);
        return redirect('admin/photos');

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
        $photos=Photo::findOrFail($id);
        return view('admin.Photos.update',compact('photos'));
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
        $photos = Photo::findOrFail($id);
        if ( $request->hasFile('file')){
            if ($request->file('file')->isValid()){
                $file = $request->file('file');
                $name = $file->getClientOriginalName();
                $file->move('images' , $name);
                //$inputs = $request->all();
                $inputs['file'] = $name;
            }
        }
        $photos->update($inputs);
        return redirect('admin/photos');
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
        $photos=Photo::findOrFail($id);
        unlink(public_path().'/images/'.$photos->file);
        $photos->delete();

        return redirect ('/admin/photos');
    }
}
