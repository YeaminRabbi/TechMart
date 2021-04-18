<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Specialoffer extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'product_title','product_price','product_availble','product_sold','image'
    ];
}