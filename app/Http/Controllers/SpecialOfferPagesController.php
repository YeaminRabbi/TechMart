<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialoffer;
use Illuminate\Support\Facades\Storage;
class SpecialOfferPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $specialOffers = Specialoffer::all();
        return view ('pages.specialOffers.list',compact('specialOffers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.specialOffers.create');
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
            'product_title' => 'required|string',
            'product_price' => 'required|string',
            'product_available' => 'required|string',
            'product_sold' => 'required|string',
            'image' => 'required|image',

        ]);

        $specialOffers = new Specialoffer;

        $specialOffers->product_title = $request->product_title;
        $specialOffers->product_price= $request->product_price;
        $specialOffers->product_available = $request->product_available;
        $specialOffers->product_sold = $request->product_sold;

        $image  = $request->file('image');
        Storage::putFile('public/frontend/',$image);
        $specialOffers->image ="storage/frontend/".$image->hashName();

        $specialOffers->save();
        
        return redirect()->route('admin.specialOffers.create')->with('success','New specialOffers created Successfully');
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
        $specialOffers = Specialoffer::find($id);
        return view('pages.specialOffers.edit',compact('specialOffers'));
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

        $specialOffers                     = SpecialOffer::find($id);
        $specialOffers->product_title      = $request->sliderTitle;
        $specialOffers->product_price      = $request->sliderDetails;
        $specialOffers->product_available  = $request->productPrice;
        $specialOffers->product_sold       = $request->product_sold;
        
        
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $specialOffers->image ="storage/img/".$image->hashName();
        }
        $specialOffers->save();
        
        return redirect()->route('admin.specialOffers.create')->with('success','specialOffers details updated Successfully');
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
        $specialOffers = Specialoffer::find($id);
        $specialOffers->delete();
        return redirect()->route('admin.specialOffers.list')->with('success',"specialOffers Deleted Successfully");
    }
}
