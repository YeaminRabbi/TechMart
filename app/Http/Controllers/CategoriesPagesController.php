<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $categories = Category::all();
        return view ('pages.categories.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.categories.create');
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
            'categoryname' => 'required|string',
            'slug' => 'required|string',
           

        ]);



        $categories = Category::firstOrCreate(
            ['categoryname' =>  request('categoryname')],
            ['slug' => request('slug')]
            
        );
        
        return redirect()->route('admin.categories.create')->with('success','New Category & details created Successfully');
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
        $categories = Category::find($id);
        return view('pages.categories.edit',compact('categories'));
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

        $categories = Category::find($id);
        $categories->brandname = $request->brandname;
        $categories->slug= $request->slug;
        $categories->save();
        
        return redirect()->route('admin.categories.create')->with('success','Category details updated Successfully');
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

        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('admin.categories.list')->with('success',"Category Deleted Successfully");
    }
}
