<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postcomment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'postcomment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['post_id', 'player_id', 'content'];
    public function author(){
        return $this->belongsTo('App\User','player_id','id');
    }
}
