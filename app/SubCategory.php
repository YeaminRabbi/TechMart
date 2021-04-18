<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SubCategory extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'subcategoryname','slug','category_id'
    ];

    function category(){
        return $this->belongsTo(Category::class);
     }
}

