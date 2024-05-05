<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use  Illuminate\Database\Eloquent\Casts\Attribute;
class Post extends Model
{
    use HasFactory;
    protected $table = "posts";

    protected $casts=[];
 protected function casts():array{
    return['published_at'=>'database',
'is_active'=>'boolean',
'prueba'=>'integer',];
 }

    protected  function title():Attribute{
return Attribute::make(
    set:function($value){
        return strtolower($value);

},
get:function($value){
return ucfirst($value);
}
);
    }

    //relacion uno  a muchos

    public function comments(){
        return $this->hasmany(Comment::class,'post_id','id');
    }

    //relacion many to many
    public function tags(){
        return $this->belongsToMany(Tag::class,'post_tag')
        -> withTimestamps();
    }
}
