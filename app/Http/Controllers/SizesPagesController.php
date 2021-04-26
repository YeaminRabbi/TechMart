<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Size;
use DB;
use Auth;
class SizesPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //

        
        $sizes = Size::all();
        return view ('pages.sizes.list',compact('sizes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.sizes.create');
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
            'sizename' => 'required|string',
            'slug' => 'required|string',
           

        ]);

        $sizes = Size::firstOrCreate(
            ['sizename' =>  request('sizename')],
            ['slug' => request('slug')]
            
        );
        
        return redirect()->route('admin.sizes.create')->with('success','New Size & details created Successfully');
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
        $sizes = Size::find($id);
        return view('pages.sizes.edit',compact('sizes'));
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

        $sizes = Size::find($id);
        $sizes->sizename = $request->sizename;
        $sizes->slug= $request->slug;
        $sizes->save();
        
        return redirect()->route('admin.sizes.list')->with('success','Sizes details updated Successfully');
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

        $sizes = Size::find($id);
        $sizes->delete();
        return redirect()->route('admin.sizes.list')->with('success',"Size Deleted Successfully");
    }
}
