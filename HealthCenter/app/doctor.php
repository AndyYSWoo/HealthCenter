<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'doctor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'type', 'level'];
    
    public function event(){
        return $this->hasMany('App\calendarevent','doctor_id');
    }
}
