<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Size extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'sizename','slug'
    ];

    function Attribute(){
        return $this->hasMany(Attribute::class, 'size_id');
    }

    
    function Cart(){
        return $this->hasMany(Cart::class, 'size_id');
    }

   
}

