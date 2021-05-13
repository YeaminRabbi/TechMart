<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;
class FAQPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $faqs = faq::all();
        return view ('pages.faqs.list',compact('faqs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.faqs.create');
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
             
            'title'       => 'required|string',
            'description' => 'required|string',
           

        ]);

        $faqs = new faq;

        $faqs->title = $request->title;
        $faqs->description = $request->description;
        
        
        $faqs->save();
        return redirect()->route('admin.faqs.create')->with('success','New Frequently Asked Questions & Answers created Successfully');
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
        $faqs = faq::find($id);
        return view('pages.faqs.edit',compact('faqs'));
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
        $faqs = faq::find($id);
        $faqs->title = $request->title;       
        $faqs->description = $request->description;       
       
        $faqs->save();

        
        return redirect()->route('admin.faqs.create')->with('success','Frequently Asked Questions & Answers updated Successfully');
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
        $faqs = faq::find($id);
        $faqs->delete();
        return redirect()->route('admin.faqs.list')->with('success',"Frequently Asked Questions & Answers Deleted Successfully");
    }
}