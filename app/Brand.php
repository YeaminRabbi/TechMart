<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Brand extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'brandname','slug'
    ];

    function Attribute(){
        return $this->hasMany(Attribute::class, 'brand_id');
    }
    public function products(){
        return $this->hasMany('App\product');
    }  
}

