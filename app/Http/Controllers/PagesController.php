<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper;
use App\Product;
use App\Feature;
use App\Category;
use App\Onsale;
use App\Brand;
use App\Specialoffer;
use App\Slider;
use App\Blog;
use DB;
use App\CommentReply;
use App\User;
use App\About;
use App\TermsConditions;
use App\faq;
class PagesController extends Controller
{
    // Here we show politics 
        public function index(){
            

            return view('pages.index',[
                'products' =>  Product::latest()->limit(2)->get(),
                'features' =>  Product::where('featured_product',1)->get(),
                'onsales' =>   Product::where('onsale_product',1)->get(),
                'specialoffers' =>   Specialoffer::all(),
                'sliders' => Slider::all(),
            ]);
        }

        public function productSearch(Request $req)
        {
            return $req->all();
        }
        
        
        public function shop(Request $request)
        {

            // return $request->all();
            $products = Product::orderBy('id','ASC')->get();
            $allproducts = Product::query();
            
            // if(!empty($_GET['category']))
            // {
            //     $categorynames = explode(',',$_GET['category']);
            //     $cat_ids= Category::select('id')->whereIn('categoryname',$categorynames)->pluck('id')->toArray();
            //     // return $cat_ids;
            //     $allproducts = $allproducts->whereIn('cat_ids',$cat_ids)->take(10); //forCategoryFilter
            //     $brands = Brand::orderBy('brandname','ASC')->with('products')->get();
            //     $categories = Category::orderBy('categoryname','ASC')->with('products')->get();
            //     return view('pages.shop',compact('products','brands','categories','allproducts'));
            // }
        


            if(!empty($_GET['brand']))
            {
                $brandnames = explode(',',$_GET['brand']);
                $brand_ids= Brand::select('id')->whereIn('brandname',$brandnames)->pluck('id')->toArray();
                $allproducts = $allproducts->whereIn('brand_id',$brand_ids)->get();
                // return $allproducts;
                $brands = Brand::orderBy('brandname','ASC')->with('products')->get();
                $latestProducts =  Product::latest()->limit(8)->get();
                $categories = Category::orderBy('categoryname','ASC')->with('products')->get();
                return view('pages.shop',compact('products','brands','categories','allproducts','latestProducts'));
            
            }

        
            elseif(!empty($_GET['sortBy']))
            {
                if($_GET['sortBy'] =='priceAsc')
                {
                    $allproducts = $allproducts->orderBy('unit_price','ASC')->get();
                    
                

                }
                elseif($_GET['sortBy'] =='priceDesc')
                {
                    $allproducts = $allproducts->orderBy('unit_price','DESC')->get();
                    

                }
            
                elseif($_GET['sortBy'] =='titleAsc')
                {
                    $allproducts = $allproducts->orderBy('product_title','ASC')->get();

                }

                elseif($_GET['sortBy'] =='titleDesc')
                {
                    $allproducts = $allproducts->orderBy('product_title','DESC')->get();

                }

                $brands = Brand::orderBy('brandname','ASC')->with('products')->get();
                $categories = Category::orderBy('categoryname','ASC')->with('products')->get();
                $latestProducts =  Product::latest()->limit(8)->get();
                return view('pages.shop',compact('products','brands','categories','allproducts','latestProducts'));
                
            }
            
            elseif(!empty($_GET['price']))
            {
                $price = explode(';',$_GET['price']);

                //  dd($price);
                $price[0] = floor($price[0]);
                $price[1] = ceil($price[1]);
                $allproducts=$allproducts->whereBetween('unit_price',$price)->paginate(12);
                $brands = Brand::orderBy('brandname','ASC')->with('products')->get();
                $latestProducts =  Product::latest()->limit(8)->get();
                $categories = Category::orderBy('categoryname','ASC')->with('products')->get();
                return view('pages.shop',compact('products','brands','categories','allproducts','latestProducts'));
            }
            else
            {
                $allproducts = Product::orderBy('id','ASC')->get();
                $brands = Brand::orderBy('brandname','ASC')->with('products')->get();
                $latestProducts =  Product::latest()->limit(8)->get();
                $categories = Category::orderBy('categoryname','ASC')->with('products')->get();
                return view('pages.shop',compact('products','brands','categories','allproducts','latestProducts'));
            }
            

        
        }


        public function shop_filter(Request $request)
        {

        
            $data = $request->all();
            //Category Filter
            $catUrl = '';
            if(!empty($data['category']))
            {
            foreach($data['category'] as $category)
            {
                if(empty($catUrl))
                {
                    $catUrl .='&category='.$category;
                }
                else{
                    $catUrl .=','.$category;
                }
            } 
            
        
        }
        

            //sort filter
            $sortUrl="";
            if(!empty($data['sortBy']))
            {
                $sortUrl.='&sortBy='.$data['sortBy'];
            }

            //price filter
            $price_range_url="";
            if(!empty($data['price_range']))
            {
                $price_range_url .= '&price='.$data['price_range'];
            }

            //brand filter
            $brandUrl="";
            if(!empty($data['brand']))
            {
                foreach($data['brand'] as $brand)
                {
                    if(empty($brandUrl))
                    {
                        $brandUrl .='&brand='.$brand;
                    }
                    else{
                        $brandUrl .=','.$brand;
                    }
                } 
            }
        
            return \redirect()->route('shop',$catUrl.$sortUrl.$price_range_url.$brandUrl);

        
        }


        public function autocomplete(Request $request)
        {
            $datas= Product::select('product_title')->where('product_title', 'LIKE', "%{$request->terms}%")->get();
            $data_arr =array();

            foreach ($datas as $d)
                {
                    $data_arr[] = $d->product_title;
                }
            
            return response()->json($data_arr);
        }
        public function search(Request $request)
        {

            $query = $request->input('query');
            $allproducts = Product::where('product_title','LIKE','%'.$query.'%')->orderBy('id','ASC')->paginate(12);
            $latestProducts =  Product::latest()->limit(8)->get();
            $brands = Brand::orderBy('brandname','ASC')->with('products')->get();
            $categories = Category::orderBy('categoryname','ASC')->with('products')->get();
            return view('pages.shop',compact('brands','categories','allproducts','latestProducts'));

        }
    

        public function about(){
            $abouts = About::all();
            return view('pages.about',compact('abouts'));
        }

        public function cart(){
            return view('pages.cart');
        }


        public function singleProduct(){
            return view('pages.singleProduct');
        }

        public function ordertrack(){
            return view('pages.ordertrack');
        }

        public function faq(){
            $faqs = faq::all();
            return view('pages.faq',compact('faqs'));
        }

        public function terms(){
            
            return view('pages.terms',[

                'terms' => TermsConditions::all()
            ]);
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

            $user_detail= DB::table('users')->join('comments','users.id','comments.user_id')->get(); 
            $comments = DB::table('comments')->where('post_id', $id)->get(); 

            $relatedposts= Blog::where('category',"=", $category)->take(3)->get(); 
            return view('pages.blog_category_pages.post',compact('blogs','relatedposts','user_detail','comments'));
            
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
