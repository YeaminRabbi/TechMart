<?php

namespace App\Http\Controllers;
use File;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Feature;
use App\Brand;
use App\Color;
use App\Category;
use App\Size;
use App\SubCategory;
use App\Gallary;
use App\Attribute;
use App\Product;
use DB;
class FeaturePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $features = Feature::all();
        return view ('pages.features.list',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $sizes = Size::all();
        $colors = Color::all();
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $brands       = Brand::all();
       
        return view('pages.features.create',['sizes'=>$sizes,'colors'=>$colors,
     
        'categories'=>$categories,'subCategories'=>$subCategories,'brands'=>$brands]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //

        $this->validate($req,[
            'product_title' => 'required|string',
            'slug' => 'required|string',
            'unit_price'=>'required|string',
            'description'=>'required|string',
            'specification'=>'required|string',
            'summary'=>'required|string',
            'category_id'=>'required|string',
            
            'subcategory_id'=>'required|string',
           

        ]);

        

        if($req->hasFile('image'))
        {
            $prod = new Feature;
            $image= $req->file('image');
            
            Storage::putFile('public/img/',$image);
            $prod->image ="storage/img/".$image->hashName();

           
            $prod->product_title = $req->product_title;
            $prod->slug = $req->slug;
            $prod->category_id = $req->category_id;
            $prod->subcategory_id = $req->subcategory_id;
            $prod->brand_id = $req->brand_id;
            $prod->unit_price = $req->unit_price;
            $prod->summary = $req->summary;
            $prod->description = $req->description;
            $prod->specification = $req->specification;

           
            $prod->save();

            foreach ($req->color_id as $key => $value) {
                $attribute = new Attribute;
                $attribute->product_id = $prod->id;
                $attribute->size_id = $req->size_id[$key];
                $attribute->color_id = $value;

                if(!empty($req->quantity[$key])){
                    $attribute->quantity = $req->quantity[$key];
                }
                else
                {
                    $attribute->quantity =0;
                }
                $attribute->save();
            }  
        }

        if($req->hasFile('images')){

            $images = $req->file('images');

         
           
            foreach ($images as $key => $img) {
                $gallery = new Gallary;
                Storage::putFile('public/gallery/',$img);
                $gallery->product_id = $prod->id;
                $gallery->images ="storage/gallery/".$img->hashName();
                $gallery->save();
            }
            
        }
        
        return redirect()->route('admin.features.create')->with('success','New Feature Product Created Successfully');



       
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
        $products = Feature::find($id);
        
        $sizes = Size::all();
        $colors = Color::all();
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $brands       = Brand::all();
        $gallary= Gallary::all();
        
        return view('pages.features.edit',[
            'products'=>$products,
            'sizes'=>$sizes,
            'colors'=>$colors,     
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'brands'=>$brands,
            'gallary'=>$gallary,

            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        

    
        $product = Feature::findOrFail($req->product_id);
        $product->product_title = $req->product_title;
        $product->slug = $req->slug;
        $product->category_id = $req->category_id;
        $product->subcategory_id = $req->subcategory_id;
        $product->brand_id = $req->brand_id;
        $product->unit_price = $req->unit_price;
        $product->summary = $req->summary;
        $product->description = $req->description;
        $product->specification = $req->specification;
        $product->save();


        if($req->file('image')){
            $image  = $req->file('image');
            Storage::putFile('public/img/',$image);
            $product->image ="storage/img/".$image->hashName();
            $product->save();

        }


        if($req->hasFile('images')){

            Gallary::where('product_id', '=' ,$product->id )->delete();

            $images = $req->file('images');

         
           
            foreach ($images as $key => $img) {
                $gallery = new Gallary;
                Storage::putFile('public/gallery/',$img);
                $gallery->product_id = $product->id;
                $gallery->images ="storage/gallery/".$img->hashName();
                $gallery->save();
            }
            
        }
        
        return redirect()->route('admin.features.list')->with('success','Feature products details updated Successfully');
        
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

        $products = Feature::find($id);
        $products->delete();
        return redirect()->route('admin.features.list')->with('success',"Feature Product Informations Deleted Successfully");
    }


    public function attributeedit_features($id)
    {
        $products_attribute = Attribute::where('product_id',$id)->get();
        $sizes = Size::all();
        $colors = Color::all();
        $product=Feature::find($id);

        return view('pages.features.attribute_edit',[
            'products_attribute'=>$products_attribute,
            'sizes'=>$sizes,
            'colors'=>$colors,
            'product'=>$product
            ]);


    }


    function attributeupdate_features(Request $req)
    {
        $attribute = Attribute::find($req->attribute_id);

        $attribute->size_id = $req->size_id;
        $attribute->color_id = $req->color_id;
        $attribute->quantity = $req->quantity;
        $attribute->save();

        return back();
    }

    function attribute_add_features(Request $req)
    {

        foreach ($req->color_id as $key => $value) {
            $attribute = new Attribute;
            $attribute->product_id = $req->product_id;
            $attribute->size_id = $req->size_id[$key];
            $attribute->color_id = $value;
            $attribute->ram = $req->ram[$key];
            if(!empty($req->quantity[$key])){
                $attribute->quantity = $req->quantity[$key];
            }
            else
            {
                $attribute->quantity =0;
            }
            $attribute->save();
        }  

        return back();
    }



    function attributedelete_features($id)
    {
       

        $attribute_to_delete = Attribute::find($id);
        $attribute_to_delete->delete();

        return back();
    }
}
