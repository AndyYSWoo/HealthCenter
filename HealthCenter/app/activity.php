<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    const TYPE_RUN      = 1;
    const TYPE_WORKOUT  = 2;
    const TYPE_SPORTS   = 3;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'author_id','type', 'place','description','poster','date','time','contact'];

    public function author(){
        return $this->belongsTo('App\user','author_id','id');
    }
    
    public function members(){
        return $this->belongsToMany('App\User','player_has_activity','activity_id','player_id');
    }
    
}
