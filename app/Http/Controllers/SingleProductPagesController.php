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
            'attributes'=>$attributes
            
          
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

  


}
