<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'privilege'];
}
