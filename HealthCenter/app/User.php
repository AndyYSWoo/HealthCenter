<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, EntrustUserTrait {
        EntrustUserTrait::can as may;
        Authorizable::can insteadof EntrustUserTrait;
    }
    // Type
    const TYPE_ADMIN    = 0;
    const TYPE_PLAYER   = 1;
    const TYPE_COACH    = 2;
    const TYPE_DOCTOR   = 3;
    
    // Gender
    const GENDER_MALE   = 1;
    const GENDER_FEMALE = 2;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','type','true_name','gender','birthday'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function followee(){
        return $this->belongsToMany('App\User','friendship','follower_id','followee_id')
                    ->withPivot('id','status');
    }
    
    public function follower(){
        return $this->belongsToMany('App\User','friendship','followee_id','follower_id')
                    ->withPivot('id','status');
    }
    
    public function feed(){
        return $this->hasMany('App\feed','author_id','id');
    }   
}
