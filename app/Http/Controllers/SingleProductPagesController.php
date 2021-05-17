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
            'ram_arr'=>$ram_arr
            
          
            ]);

    }

     public function findRam($size_id, $product_id)
        {
            $output = ' ';
            $ram = Attribute::where('size_id', $size_id)->where('product_id', $product_id)->get();
            foreach($ram as $data)
            {
                $output = $output." ".'<input name="ram_id" id="ram_id" data-attribute="'.$data->id.'" type="radio" value="'.$data->ram.'">'.    $data->ram.'';
            }
            return $output;
        }

        // public function findColor($attribute_id)
        // {
        //     $output2 = ' ';
        //     $color = Attribute::where('id', $attribute_id)->get();
        //     foreach($color as $data)
        //     {
        //         $output2 = $output2." ".'<input name="color_id" type="radio" value="'.$data->color_id.'">'.    $data->color_id.'';
        //     }
        //     return $output2;

        // }


}
