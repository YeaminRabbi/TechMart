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
class SingleProductPagesController extends Controller
{
    
    function SingleProduct($id)
    {
        $product = Product::find($id);
        $attributes=Attribute::where('product_id', $id)->get();
        $gallery = Gallary::where('product_id', $id)->get();
       
        $color_arr =array();
        $size_arr = array();
        $ram_arr = array();
        $quantity_arr = array();

        foreach ($attributes as $data)
            {
                $color_arr[] = $data->Color->colorname;
                $size_arr[] = $data->Size->sizename;
                $ram_arr[] = $data->ram;
                $quantity_arr[] = $data->quantity;

            }

        return view('pages.singleProduct',[
            'product'=>$product,
            'gallery'=>$gallery,
            'color_arr'=> $color_arr,
            'size_arr'=>$size_arr,
            'ram_arr'=>$ram_arr,
            'quantity_arr'=>$quantity_arr  
          
          
            ]);

    }

}
