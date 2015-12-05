<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friendship extends Model
{
    const STATUS_PENDING    = 1;
    const STATUS_ACCEPTED   = 2;
    const STATUS_DENIED     = 3;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'friendship';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['followee_id', 'follower_id', 'status'];
    
    public function followee(){
        $this->belongsTo('App\User','followee_id');
    }
    public function follower(){
        $this->belongsTo('App\User','follower_id');
    }
}
