<?php

namespace App\Policies;
use App\User;
use App\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function adminAuthroized(User $user){
        $admin = Admin::where('id',$user->id)->first();
        if($admin){
            // 登陆且为管理员, 授权成功
            return true;
        }else{
            return false;
        }
    }
}
