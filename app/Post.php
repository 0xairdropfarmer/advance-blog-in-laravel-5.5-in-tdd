<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    
    public function storeComment($comment){
        $this->comment()->create($comment);
    }
    
    public function creator(){
        return $this->belongsTo(User::class,'user_id');
    }
}
