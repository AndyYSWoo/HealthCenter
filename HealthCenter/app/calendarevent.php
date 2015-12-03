<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calendarevent extends Model
{
    // type
    const TYPE_LONG     = 1;
    const TYPE_SHORT    = 2;
    // status
    const STATUS_NONE       = 0;
    const STATUS_PENDING    = 1;
    const STATUS_ACCEPTED   = 2;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'calendarevent';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['doctor_id', 'client_id', 'title','status','type','start_date','end_date','start_time','end_time'];
    public function user(){
        return $this->belongsTo('App\user','client_id','id');
    }
    public function player(){
        return $this->belongsTo('App\player','client_id','id');
    }
    public function doctor(){
        return $this->belongsTo('App\doctor','doctor_id','id');
    }
}
