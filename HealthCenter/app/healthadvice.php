<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class healthadvice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'healthadvice';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['doctor_id', 'player_id', 'content'];
    
    public function user(){
        return $this->belongsTo('App\user','player_id','id');
    }
    public function player(){
        return $this->belongsTo('App\player','player_id','id');
    }
    public function doctor(){
        return $this->belongsTo('App\doctor','doctor_id','id');
    }
    public function docUser(){
        return $this->belongsTo('App\user','doctor_id','id');
    }
    
}
