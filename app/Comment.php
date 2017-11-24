<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     public function creator(){
        return $this->BelongsTo(User::class,'user_id');
    }
    
}
