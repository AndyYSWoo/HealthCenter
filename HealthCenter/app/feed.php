<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feed extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'feed';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['author_id', 'content', 'photo'];
    
    public function comment(){
        return $this->hasMany('App\feedcomment','feed_id','id');
    }
    
    public function user(){
    	return $this->belongsTo('App\User','author_id','id');
    }
}
