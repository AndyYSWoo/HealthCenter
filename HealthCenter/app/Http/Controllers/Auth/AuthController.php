<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Redirect;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    public function getLogin(){
        if(Auth::check()){
            return "Already logged in";
        }else{
            return view('auth.login');
        }
    }
    public function postLogin(Request $request){
    $user = User::where('email',$request->input('email'))->first();
    if($user){
        if(Auth::attempt(['email' => $request->input('email'),'password'=>$request->input('password')])){
            // 成功登陆
            switch($user->type){
                case 0:// 管理员主界面
                    return "hi";
                    break;
            }
        }else{
            return "Wrong Password";// 登陆失败
        }
    }else{
        // 用户不存在
        return "User Not Exist";
    }
}
}
