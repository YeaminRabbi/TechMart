<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Attribute extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'product_id','size_id','color_id','quantity'
    ];

    function Size(){
        return $this->belongsTo(Size::class, 'size_id');
    }

    function Color(){
        return $this->belongsTo(Color::class, 'color_id');
    }

    function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}

