<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class healthentry extends Model
{
    const TYPE_SLEEP = 1;
    
    const LEVEL_BAD  = 1;
    const LEVEL_MID  = 2;
    const LEVEL_GOOD = 3;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'healthentry';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'device_id', 'timescale','level','type','begin_time','end_time','last_time','value','description'];
}
