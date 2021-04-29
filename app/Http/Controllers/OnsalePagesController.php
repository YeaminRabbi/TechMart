<?php

namespace App\Http\Controllers;
use File;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Onsale;
use App\Product;

use DB;
class OnsalePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $products=Product::where('onsale_product',1)->get();
        return view('pages.onsales.list',['products'=>$products]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $products=Product::where('onsale_product',0)->get();
        return view('pages.onsales.create',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inserting(Request $req)
    {
       
        $product = Product::find($req->product_id);

        $product->onsale_product =1;
        $product->onsale_price =$req->onsale_price;
        $product->save();

        return redirect()->route('admin.onsales.create')->with('success',"onsales Product Informations Inserted Successfully");

        
       
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeOnsale($id)
    {
        $product = Product::find($id);
        $product->onsale_product=0;
        $product->onsale_price=0;
        $product->save();
        
        return redirect()->route('admin.onsales.list')->with('success',"Onsales Product Informations Deleted Successfully");
    }


    
}
