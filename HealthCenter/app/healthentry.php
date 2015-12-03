<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class healthentry extends Model
{
    // Type
    const TYPE_SLEEP            = 1;
    const TYPE_BLOODPRESSURE    = 2;
    const TYPE_HEARTRATE        = 3;
    const TYPE_TEMPERATURE      = 4;
    const TYPE_HEIGHT           = 5;
    const TYPE_WEIGTH           = 6;
    
    // Level    
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
    protected $fillable = ['user_id', 'device_id', 'timescale','level','type','begin_time','end_time','last_time','value','value2','description'];
}
