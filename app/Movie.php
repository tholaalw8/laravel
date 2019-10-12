<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = ['id','slug','title','released_year','genre','rating','casts','director','language','type'];
    protected $primaryKey = 'id';

    public function user(){

        return $this->belongsTo('App\user');

    }
    
    public function comments(){
        return $this->hasMany('App\Comment','post_id');
    }

}
