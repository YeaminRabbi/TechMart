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
      

      
        return view('pages.singleProduct',[
            'product'=>$product
            
            ]);

    }

}
