<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','slug', 'date','image','text', 'description',
    'posted','type','category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->morphToMay(Tag::class,'taggables');
    }
    public function getImageUrl(){
        return URL::asset("imgages/post/".$this->image);
    }

}
