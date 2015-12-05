<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'post';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['group_id', 'author_id', 'title','content','photo'];
    
    public function author(){
        return $this->belongsTo('App\User','author_id','id');
    }
    
    public function comments(){
        return $this->hasMany('App\postcomment','post_id','id');
    }
}
