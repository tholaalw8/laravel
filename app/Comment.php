<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded =['id'];
    protected $fillable =['content','post_id','user_id','post_type'];

    public function post(){

        return $this->morphTo();

    }


}
