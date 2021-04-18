<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attribute;
use App\Size;
use App\Color;
use App\Product;
class AttributePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $attributes = Attribute::all();
        return view ('pages.attributes.list',compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $sizes = Size::all();
        $colors = Color::all();
        // $products = Product::all();
       
        return view('pages.attributes.create',['sizes'=>$sizes,'colors'=>$colors]);

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
            'size_id' => 'required|string',
            'color_id' => 'required|string',
            'product_id'=>'required|string'
           

        ]);



        $subcategories = SubCategory::firstOrCreate(
            ['size_id' =>  request('size_id')],
            ['color_id'            =>  request('color_id')],
            ['product_id'     =>  request('product_id')]

            
        );


        return redirect()->route('admin.attributes.create')->with('success','New Attributes & details created Successfully');

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
        $attributes = Attribute::find($id);
        return view('pages.attributes.edit',compact('attributes'));
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
        $attributes = Attribute::find($id);
        $attributes->size_id = $request->size_id;
        $attributes->color_id= $request->size_id;
        $attributes->product_id= $request->product_id;
        $attributes->save();
        
        return redirect()->route('admin.attributes.create')->with('success','Attributes details updated Successfully');
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
        $attributes = Attribute::find($id);
        $attributes->delete();
        return redirect()->route('admin.attributes.list')->with('success',"Attributes Informations Deleted Successfully");
    }
}
