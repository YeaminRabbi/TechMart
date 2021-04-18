<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Gallary extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'product_id','images'
    ];
   
    function product()
     {
        return $this->belongsTo(Product::class);
     }

}

