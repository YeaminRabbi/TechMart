<?php

namespace App\Http\Controllers;
use File;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Feature;
use App\Brand;
use App\Color;
use App\Category;
use App\Size;
use App\SubCategory;
use App\Gallary;
use App\Attribute;
use App\Product;
use DB;
class FeaturePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $products=Product::where('featured_product',1)->get();
        return view('pages.features.list',['products'=>$products]);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

       $products=Product::where('featured_product',0)->get();
       return view('pages.features.create',['products'=>$products]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //

        
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
        
    }

    public function update(Request $req)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  


    public function addfeatured($id)
    {
        $product=Product::find($id);
        $product->featured_product = 1;
        $product->save();
        return redirect()->route('admin.features.create')->with('success',"Added to Feature Product Successfully");

    }

    public function removefeatured($id)
    {
        $product=Product::find($id);
        $product->featured_product = 0;
        $product->save();
        return redirect()->route('admin.features.list')->with('success',"Removed Feature Product Successfully");

    }   
}
