<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'player';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'birthday'];
}
