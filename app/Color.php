<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Color extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'colorname','slug'
    ];
   
    function Attribute(){
        return $this->hasMany(Attribute::class, 'color_id');
    }

    // function Cart(){
    //     return $this->hasMany(Cart::class, 'size_id');
    // }
    
}

