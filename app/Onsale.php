<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Onsale extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'product_title','slug','quantity','unit_price','description','specification',
        'summary','category_id','image','brand_id','subcategory_id'
        
    ];

    function brand(){
       
        return $this->belongsTo(Brand::class);
     }

    //  function gallery()
    //  {
    //     return $this->hasMany(Gallery::class, 'product_id');
    //  }

     function category(){
            return $this->belongsTo(Category::class, 'category_id');
      }

      function subcategory(){
         return $this->belongsTo(SubCategory::class, 'subcategory_id');
       }

      function attribute()
      {
         return $this->hasMany(Attribute::class, 'product_id');
      }

    //   function cart()
    //   {
    //      return $this->hasMany(Cart::class, 'product_id');
    //   }


    public static function minPrice()
    {
        return floor (\App\Product::min('unit_price'));
    }

    public static function maxPrice()
    {
        return floor (\App\Product::max('unit_price'));
    }
    
}

