<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class faq extends Model{

    
    protected $fillable = [
        'title','description'
    ];
}