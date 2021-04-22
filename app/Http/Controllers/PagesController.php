<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Feature;
use App\Onsale;
use App\Specialoffer;
use App\Slider;
use App\Blog;
class PagesController extends Controller
{
    //
   
        // Here we show politics 
        public function index(){
           

            return view('pages.index',[
                'products' =>  Product::latest()->limit(2)->get(),
                'features' =>  Feature::latest()->limit(2)->get(),
                'onsales' =>   Onsale::latest()->limit(3)->get(),
                'specialoffers' =>   Specialoffer::all(),
                'sliders' => Slider::all(),
            ]);
        }


        
        





        public function about(){
            return view('pages.about');
        }

        public function cart(){
            return view('pages.cart');
        }

        public function shop(){
            return view('pages.shop');
        }

        public function singleProduct(){
            return view('pages.singleProduct');
        }

        public function ordertrack(){
            return view('pages.ordertrack');
        }

        public function faq(){
            return view('pages.faq');
        }

        public function terms(){
            return view('pages.terms');
        }

        

        public function blog(){
           
            
            $recentposts=  Blog::latest()->limit(2)->get();
            $blogs = Blog::paginate(2);
            $categories = Blog::orderBy('category','desc')->get();

           

            return view('pages.blog',compact('recentposts','blogs','categories'));


           
            
            
        }


        public function allpost($id, $category){
            // SinglePost
            $blogs = Blog::find($id);
           
            $relatedposts= Blog::where('category',"=", $category)->take(3)->get(); 
            return view('pages.blog_category_pages.post',compact('blogs','relatedposts'));
            
        }


        // Here we show politics 
     public function politics(){
        $blogs_politics = Blog::where('category','politics')->get();
        return view('pages.blog_category_pages.politics',compact('blogs_politics'));
    }

    // Here we show travel 
    public function travel(){
        
        $blogs_travel = Blog::where('category','travel')->get();
        return view('pages.blog_category_pages.travel',compact('blogs_travel'));
    }

    // Here we show international news 
    public function internationalnews(){
        $blogs_international = Blog::where('category','internationalnews')->get();
        return view('pages.blog_category_pages.international',compact('blogs_international'));
    }

    // Here we show job 
    public function job(){
        $blogs_job = Blog::where('category','job')->get();
        return view('pages.blog_category_pages.job',compact('blogs_job'));
    }

    // Here we show health 
    public function health(){
        $blogs_health = Blog::where('category','health')->get();
        return view('pages.blog_category_pages.health',compact('blogs_health'));
    }

    // Here we show coronavirus 
    public function coronavirus(){
        $blogs_coronavirus = Blog::where('category','coronavirus')->get();
        return view('pages.blog_category_pages.coronavirus',compact('blogs_coronavirus'));
    }
    
    // Here we show Bangladesh 
    public function Bangladesh(){
        $blogs_bangladesh = Blog::where('category','Bangladesh')->get();
        return view('pages.blog_category_pages.Bangladesh',compact('blogs_bangladesh'));
    }

    // Here we show religion 
    public function religion(){
        $blogs_religion = Blog::where('category','religion')->get();
        return view('pages.blog_category_pages.religion',compact('blogs_religion'));
    }

    // Here we show gadget 
    public function gadget(){
        $blogs_gadget = Blog::where('category','gadget')->get();
        return view('pages.blog_category_pages.gadget',compact('blogs_gadget'));
    }


    // Here we show lifestyle 
    public function lifestyle(){
        $blogs_lifestyle = Blog::where('category','lifestyle')->get();
        return view('pages.blog_category_pages.lifestyle',compact('blogs_lifestyle'));
    }
    
    // Here we show fashion 
    public function fashion(){
        $blogs_fashion = Blog::where('category','fashion')->get();
        return view('pages.blog_category_pages.fashion',compact('blogs_fashion'));
    }
    
    // Here we show sports 
    public function sports(){
        $blogs_sports = Blog::where('category','sports')->get();
        return view('pages.blog_category_pages.sports',compact('blogs_sports'));
    }

    // Here we show business 
    public function business(){
        $blogs_business = Blog::where('category','business')->get();
        return view('pages.blog_category_pages.business',compact('blogs_business'));
    }



        
    
    

}
