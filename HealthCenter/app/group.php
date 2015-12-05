<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'group';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['author_id','group' ,'motto', 'description','poster'];

}
