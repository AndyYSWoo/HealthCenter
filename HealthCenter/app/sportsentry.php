<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sportsentry extends Model
{
    const TYPE_RUN = 1;
    
    const LEVEL_MILD    = 1;
    const LEVEL_MID     = 2;
    const LEVEL_FIERCE  = 3;
    
    protected $table = 'sportsentry';
    protected $fillable = ['user_id', 'device_id','type','timescale','level','last_time','calories','value','start_time','end_time','description'];
}
