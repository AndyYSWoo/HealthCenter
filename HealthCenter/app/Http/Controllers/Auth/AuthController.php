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
                    case User::TYPE_PLAYER:
                        return Redirect::to('/player');
                        break;
                    case User::TYPE_COACH:
                        return Redirect::to('/coach');
                        break;
                    case User::TYPE_DOCTOR:
                        return Redirect::to('/doctor');
                        break;
                    case User::TYPE_ADMIN:
                        return Redirect::to('/admin');
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
    
    public function getReg(){
        return view('auth.register');
    }
    
    public function postReg(Request $request){
        $user = new User;
        $user->email = $request->input('email');
        $user->type = 1;
        $user->password = bcrypt($request->input('password'));
        $user->true_name = $request->input('last_name').' '.$request->input('first_name');
        $user->name = $request->input('display_name');
        $user->gender = $request->input('gender');
        $user->birthday = $request->input('birthday');
        $user->save();
        return Redirect::to('/auth/login');
    }
}
