<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player_has_activity extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'player_has_activity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['player_id', 'activity_id'];
}
