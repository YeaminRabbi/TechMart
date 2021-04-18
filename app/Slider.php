<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Slider extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'sliderTitle','TitleEmphasise','sliderDetails','productPrice','image'
    ];
}