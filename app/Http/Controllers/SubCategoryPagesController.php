<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Category;
class SubCategoryPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //

        $subcategories = SubCategory::all();
        return view ('pages.subcategories.list',compact('subcategories'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
       
        return view('pages.subcategories.create',['categories'=>$categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        $this->validate($request,[
            'subcategoryname' => 'required|string',
            'slug' => 'required|string',
            'category_id'=>'required|string'
           

        ]);

        $subcategories = new SubCategory;

        $subcategories->subcategoryname = $request->subcategoryname;
        $subcategories->slug= $request->slug;
        $subcategories->category_id = $request->category_id;
        
        $subcategories->save();
        
        return redirect()->route('admin.subcategories.create')->with('success','New Sub Category & details created Successfully');
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

        $subcategories = SubCategory::find($id);
        return view('pages.subcategories.edit',compact('subcategories'));
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

        $subcategories = SubCategory::find($id);
        $subcategories->subcategoryname = $request->subcategoryname;
        $subcategories->slug= $request->slug;
        $subcategories->save();
        
        return redirect()->route('admin.subcategories.list')->with('success','Sub Category details updated Successfully');
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

        $subcategories = SubCategory::find($id);
        $subcategories->delete();
        return redirect()->route('admin.subcategories.list')->with('success',"SUb Category Informations Deleted Successfully");
    }
}
