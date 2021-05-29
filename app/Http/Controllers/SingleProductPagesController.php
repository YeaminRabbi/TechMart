<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Brand;
use App\Color;
use App\Category;
use App\Size;
use App\SubCategory;
use App\Gallary;
use App\Attribute;
use DB;
use App\Cart;
use Auth;
use App\Review;
use App\Wishlist;

class SingleProductPagesController extends Controller
{
    
    function SingleProduct($id)
    {
        $product = Product::find($id);
        $attributes=Attribute::where('product_id', $id)->get();
        $gallery = Gallary::where('product_id', $id)->get();
        $reviews = Review::where('product_id', $id)->get();

        $color_arr =array();
        $size_arr = array();
        $ram_arr = array();
        $quantity_arr = array();

        $custom_size= array();

        foreach ($attributes as $key=>$data)
            {
                $color_arr[$key][0] = $data->Color->id;
                $color_arr[$key][1] = $data->Color->colorname;    

                $ram_arr[] = $data->ram;                    
                
                $size_arr[$key][0]=  $data->Size->id;
                $size_arr[$key][1]=  $data->Size->sizename;
            }

            
           

        return view('pages.singleProduct',[
            'product'=>$product,
            'gallery'=>$gallery,
            'color_arr'=> $color_arr,
            'size_arr'=>$size_arr,
            'ram_arr'=>$ram_arr,
            'attributes'=>$attributes,
            'reviews'=>$reviews
            
          
            ]);

    }

     public function findRam($attribute_id, $product_id)
        {
            $output = 'BDT. ';

           

            $product_price = Attribute::where('id', $attribute_id)->get();
            foreach($product_price as $data)
            {
                $output = $output." ".'<input name="price" id="price" data-attribute="'.$data->id.'" type="text" value="'.$data->variant_price.'" style="border:none;font-size:30px;">';
            }
            return $output;
        }

  
        function addToCart(Request $request)
        {
            
            $this->validate($request,[

                'price' => 'required|string',
                'att_id' => 'required|string',
                'quantity'=>'required|string',              
    
            ]);

            
            $att_id = $request->att_id;

            $attribute = Attribute::where('id',$att_id)->first();
            $color = Color::where('id', $attribute->color_id)->first();
            $rom = Size::where('id', $attribute->size_id)->first();

            $ram =  $attribute->ram;
            $size = $rom->sizename;
            $product_id = $attribute->product_id;
            $calorname = $color->colorname;
            $price = $attribute->variant_price;

            $cart= new Cart; 
            $cart->user_id = Auth::id();
            $cart->product_id = $product_id;
            $cart->color = $calorname;
            $cart->size = $size;
            $cart->ram = $ram;
            $cart->quantity = $request->quantity;
            $cart->price = $price;
            $cart->attribute_id = $att_id;
            $cart->save();
                
          
            return back(); 
        }



        function addToCartOnSale(Request $request)
        {
            $this->validate($request,[

                'price' => 'required|string',
                'att_id' => 'required|string',
                'quantity'=>'required|string',              
    
            ]);

            $onsale_rate= $request->onsale_rate;

            $att_id = $request->att_id;

            $attribute = Attribute::where('id',$att_id)->first();
            $color = Color::where('id', $attribute->color_id)->first();
            $rom = Size::where('id', $attribute->size_id)->first();

            $ram =  $attribute->ram;
            $size = $rom->sizename;
            $product_id = $attribute->product_id;
            $calorname = $color->colorname;
            $price = $attribute->variant_price;

            $OnSalePrice = $price - (($price * $onsale_rate)/100);
            $cart= new Cart; 
            $cart->user_id = Auth::id();
            $cart->product_id = $product_id;
            $cart->color = $calorname;
            $cart->size = $size;
            $cart->ram = $ram;
            $cart->quantity = $request->quantity;
            $cart->price = $OnSalePrice;
            $cart->attribute_id = $att_id;
            $cart->save();
                
          
            return back(); 
        }


    function SingleProduct_onsale($id)
    {
        $product = Product::find($id);
        $attributes=Attribute::where('product_id', $id)->get();
        $gallery = Gallary::where('product_id', $id)->get();
        $reviews = Review::where('product_id', $id)->get();

        $color_arr =array();
        $size_arr = array();
        $ram_arr = array();
        $quantity_arr = array();

        $custom_size= array();

        foreach ($attributes as $key=>$data)
            {
                $color_arr[$key][0] = $data->Color->id;
                $color_arr[$key][1] = $data->Color->colorname;    

                $ram_arr[] = $data->ram;                    
                
                $size_arr[$key][0]=  $data->Size->id;
                $size_arr[$key][1]=  $data->Size->sizename;
            }

            
           

        return view('pages.singleProduct_onsale',[
            'product'=>$product,
            'gallery'=>$gallery,
            'color_arr'=> $color_arr,
            'size_arr'=>$size_arr,
            'ram_arr'=>$ram_arr,
            'attributes'=>$attributes,
            'reviews'=>$reviews
          
            ]);
    }



    public function review(Request $request)
    {
        
        $user_id = Auth::id();
        $user = Auth::user();

        $review = new Review;
        $review->user_id =  $user_id;
        $review->product_id =  $request->product_id;
        $review->message =  $request->message;
        $review->name =  $user->name;
        $review->email =  $user->email;
        $review->rating =  $request->rating;

        $review->save();

        return back();
    }


    function wishlist($id)
    {
        $wishlist = new Wishlist;

        $wishlist->user_id = Auth::id();
        $wishlist->product_id = $id;

        $wishlist->save();

        return back();
    }



    function wishlistshow()
    {

        $user_id = Auth::id();
        $wishlistItems = Wishlist::where('user_id', $user_id)->get();
        return view('pages.wishlist',
        [
           'wishlistItems' => $wishlistItems
        ]);
    }   


    function WishlistItemDelete($id)
    {
        $item = Wishlist::find($id);

        $item->delete();

        return back();
    }

}
