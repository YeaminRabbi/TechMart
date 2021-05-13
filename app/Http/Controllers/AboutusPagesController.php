<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\About;
class AboutusPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $abouts = About::all();
        return view ('pages.abouts.list',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.abouts.create');
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
        $this->validate($request,[
            'wedodescription' => 'required|string',
            'visiondescription' => 'required|string',
            'missiondescription' => 'required|string',
            'membername' => 'required|string',
            'memberdesignation' => 'required|string',            
            'image' => 'required|image',

        ]);

        $abouts = new About;
        
        $abouts->wedodescription = $request->wedodescription;
        $abouts->visiondescription = $request->visiondescription;
        $abouts->missiondescription= $request->missiondescription;
        $abouts->membername = $request->membername;
        $abouts->memberdesignation = $request->memberdesignation;
       

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $abouts->image ="storage/img/".$image->hashName();

        $abouts->save();
        
        return redirect()->route('admin.abouts.create')->with('success','New Entry Inserted created Successfully');
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
        $abouts = About::find($id);
        return view('pages.abouts.edit',compact('abouts'));
        

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

        $abouts                = About::find($id);
        $abouts->wedodescription   = $request->wedodescription;
        $abouts->visiondescription   = $request->visiondescription;
        $abouts->missiondescription = $request->missiondescription;
        $abouts->membername  = $request->membername;
        $abouts->memberdesignation = $request->memberdesignation;
        
        
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $abouts->image ="storage/img/".$image->hashName();
        }
        $abouts->save();
        
        return redirect()->route('admin.abouts.create')->with('success','About Details updated Successfully');

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
        $abouts = About::find($id);
        $abouts->delete();
        return redirect()->route('admin.abouts.list')->with('success',"About Deleted Successfully");
    }
}