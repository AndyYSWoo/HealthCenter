<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player_in_group extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'player_in_group';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['group_id', 'player_id'];

}
