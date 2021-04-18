<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Blog;
use App\BlogTag;
use App\blogtagconnection;

class BlogPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
      
        $tags = BlogTag::all(); 
        $blogs = Blog::all();
        return view ('pages.blogs.list',compact('blogs','tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = BlogTag::all();
        return view('pages.blogs.create',compact('tags'));
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
            'title' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'highlightedText' => 'required|string',
            'image' => 'required|image',

        ]);

        $blogs = new Blog;
        $blogs->title = $request->title;
        $blogs->category= $request->category;
        $blogs->description = $request->description;
        $blogs->highlightedText = $request->highlightedText;         
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $blogs->image ="storage/img/".$image->hashName();
        
        $blogs->save();
        return redirect()->route('admin.blogs.create')->with('success','New Posts Category & details created Successfully');
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
        $tags = BlogTag::all();
        $blogs = Blog::find($id);
        return view('pages.blogs.edit',compact('blogs','tags'));
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
        $blogs = Blog::find($id);
        $blogs->title = $request->title;
        $blogs->category= $request->category;
        $blogs->description = $request->description;       
        $blogs->highlightedText = $request->highlightedText;        
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $blogs->image ="storage/img/".$image->hashName();
        }
        $blogs->save();

        
        return redirect()->route('admin.blogs.create')->with('success','New Posts Category & details updated Successfully');

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
        $blogs = Blog::find($id);
        $blogs->delete();
        return redirect()->route('admin.blogs.list')->with('success',"Post Deleted Successfully");
    }
}
