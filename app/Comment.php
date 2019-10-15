<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded =['id'];
    protected $fillable =['content','post_id','user_id'];

//    public function ticket(){
//
//        return $this->belongsTo('App\Ticket');
//
//    }
//
//    public function movie(){
//
//        return $this->belongsTo('App\Movie');
//    }
}
