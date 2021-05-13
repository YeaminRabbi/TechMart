<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TermsConditions;
class TermsConditionsPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $terms = TermsConditions::all();
        return view ('pages.terms.list',compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.terms.create');
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
          
            'description' => 'required|string',
           

        ]);

        $terms = new TermsConditions;
       
        $terms->description = $request->description;
        
        
        $terms->save();
        return redirect()->route('admin.terms.create')->with('success','New Terms created Successfully');
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
        $terms = TermsConditions::find($id);
        return view('pages.terms.edit',compact('terms'));
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
        $terms = TermsConditions::find($id);
       
        $terms->description = $request->description;       
       
        $terms->save();

        
        return redirect()->route('admin.terms.create')->with('success','New Terms & Conditions updated Successfully');
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
        $terms = TermsConditions::find($id);
        $terms->delete();
        return redirect()->route('admin.terms.list')->with('success',"Terms & Conditions Deleted Successfully");
    }
}