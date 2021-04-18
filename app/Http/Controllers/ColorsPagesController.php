<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
class ColorsPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //

        $colors = Color::all();
        return view ('pages.colors.list',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.colors.create');
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
            'colorname' => 'required|string',
            'slug' => 'required|string',
           

        ]);



        $categories = Color::firstOrCreate(
            ['colorname' =>  request('colorname')],
            ['slug' => request('slug')]
            
        );
        
        return redirect()->route('admin.colors.create')->with('success','New Color & details created Successfully');
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

        $colors = Color::find($id);
        return view('pages.colors.edit',compact('colors'));
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

        $colors = Category::find($id);
        $colors->colorname = $request->colorname;
        $colors->slug= $request->slug;
        $colors->save();
        
        return redirect()->route('admin.colors.create')->with('success','Color details updated Successfully');
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
        $colors = Color::find($id);
        $colors->delete();
        return redirect()->route('admin.colors.list')->with('success',"Color Deleted Successfully");
    }
}
