<?php

namespace App\Http\Controllers;

use App\about;
use App\Awards;
use App\Education;
use App\Experience;
use App\Interest;
use App\Photo;
use App\Skills;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alls = about::all();
        return view('admin.about.all',compact('alls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = about::all();

        return view('admin.about.create',compact('roles'));
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

        about::create($request->all());



        return redirect('admin/about');
//        return "it works";

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
        $about=about::findOrFail($id);
        return view('admin.about.update',compact('about'));
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
        $about =about::findOrFail($id);
        $about->update($request->all());

        return redirect('/admin/about');

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

    about::findOrFail($id)->delete();
    return redirect('admin/about');


}

public function abs(){

    $ab = about::all();
    $exps = Experience::all();
    $edus = Education::all();
    $skills = Skills::all();
    $inters = Interest::all();
    $awards = Awards::all();
    $photos = Photo::all();

    return view('rh',compact('ab','exps','edus','skills','inters','awards','photos'));
}

//    public function edu(){
//
//        $edu = about::all();
//        return view('rh',compact('edu'));
//    }




}
