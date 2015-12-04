<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class friendship extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'friendship';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['followee_id', 'follower_id', 'status'];
}
