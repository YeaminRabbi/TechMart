<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class AutocompletePagesController extends Controller
{
    //

    public function blogsearch(Request $req)
    {

        // $search = request()->query('search');
        $search = $req->search;
        

        if($search){
            $blogs = Blog::where('title','LIKE', '%'.$search.'%')->get();
            $recentposts=  Blog::latest()->limit(2)->get();
            // $blogs = Blog::paginate(2);
            $categories = Blog::orderBy('category','desc')->get();

            return view('pages.blogsearch',compact('recentposts','blogs','categories'));
            
        }
        else{

            $recentposts=  Blog::latest()->limit(2)->get();
            $blogs = Blog::paginate(2);
            $categories = Blog::orderBy('category','desc')->get();

           

            return view('pages.blog',compact('recentposts','blogs','categories'));
        }
        return view('pages.blogsearch');
        
        
    }

}
