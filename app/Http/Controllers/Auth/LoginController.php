<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/post';
  
    public function login(Request $request)
    {
        # code...
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // if ($request->remember == trans('remember.Remember Me')) {
        //     $remember = true;
        // } else {
        //     $remember = false;
        // }
        //kiểm tra trường remember có được chọn hay không
        
        if (Auth::attempt($arr)) {

            $userAdmin = auth()->user()->is_admin;
            if($userAdmin == '0') {
                return redirect()->route('home');  
            } else {
                return redirect('/admin/post');  
            }
            //..code tùy chọn
            //đăng nhập thàndh công thì hiển thị thông báo đăng nhập thành công
        } else {
            return redirect()->route('login');  

            //...code tùy chọn
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');  
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
