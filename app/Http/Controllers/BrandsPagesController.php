<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $brands = Brand::all();
        return view ('pages.brands.list',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.brands.create');
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
            'brandname' => 'required|string',
            'slug' => 'required|string',
           

        ]);



        $brands = Brand::firstOrCreate(
            ['brandname' =>  request('brandname')],
            ['slug' => request('slug')]
            
        );
        
        return redirect()->route('admin.brands.create')->with('success','New brands & details created Successfully');
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

        $brands = Brand::find($id);
        return view('pages.brands.edit',compact('brands'));
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

        $brands = Brand::find($id);
        $brands->brandname = $request->brandname;
        $brands->slug= $request->slug;
        $brands->save();
        
        return redirect()->route('admin.brands.create')->with('success','Brand details updated Successfully');

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
        $brands = Brand::find($id);
        $brands->delete();
        return redirect()->route('admin.brands.list')->with('success',"Brand Deleted Successfully");
    }
}
