<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogTag;
class BlogTagPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $blogtags = blogTag::all();
        return view ('pages.blogtags.list',compact('blogtags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.blogtags.create');
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


        $blogtags = new blogTag;

        $blogtags->tagname = $request->tagname;
        $blogtags->tagDescription= $request->tagDescription;
        $blogtags->save();
        
        return redirect()->route('admin.blogtags.create')->with('success','New Blog Tag details created Successfully');
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
        $blogtags = blogTag::find($id);
        return view('pages.blogtags.edit',compact('blogtags'));
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
        $blogtags = blogTag::find($id);
        $blogtags->tagname = $request->tagname;
        $blogtags->tagDescription= $request->tagDescription;
  
        $blogtags->save();
        
        return redirect()->route('admin.blogtags.create')->with('success','New Blog Tag & details updated Successfully');
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
        $blogtags = blogTag::find($id);
        $blogtags->delete();
        return redirect()->route('admin.blogtags.list')->with('success',"Blog Tag & Details Deleted Successfully");
    }
}
