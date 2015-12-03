<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player_has_doctor extends Model
{
    const STATUS_PENDING    = 1;
    const STATUS_ACCEPTED   = 2;
    const STATUS_DENIED     = 3;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'player_has_doctor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['player_id','doctor_id','status','message'];
    
    public function user(){
        return $this->belongsTo('App\user','player_id','id');
    }
    public function player(){
        return $this->belongsTo('App\player','player_id','id');
    }
    public function doctor(){
        return $this->belongsTo('App\doctor','doctor_id','id');
    }
}
