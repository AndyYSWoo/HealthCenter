<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedcomment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'feedcomment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['feed_id', 'author_id', 'content'];
    
    public function user(){
    	return $this->belongsTo('App\User','author_id','id');
    }
}
