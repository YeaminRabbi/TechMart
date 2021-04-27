<?php
use Cviebrock\EloquentTaggable\Taggable;
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model{
    use SoftDeletes;
   
    protected $fillable = [
        'category','title','description','image','highlightedText'
    ];
    
    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id');
    }


    // public function tags()
    // {
    //     return $this->belongsToMany('App\blogTag');
    // }
}

