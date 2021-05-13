<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class About extends Model{
    use SoftDeletes;
    
    protected $fillable = [
        'wedodescription','visiondescription','missiondescription','membername','memberdesignation','image'
    ];
}