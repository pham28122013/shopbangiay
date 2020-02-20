<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Login to the admin page.
     *
     * @return view
     */
    public function getLogin()
    {
    	return view('admin.auth.login');
    }

    /**
     * Login to the admin page.
     *
     * @param \Illuminate\Http\Request  $request
     * @return route
     */
    public function postLogin (Request $request) 
    {
        $email = $request['email'];
        $password = $request['password'];
        $remember = $request->has('remember');
        if(Auth::attempt(['email' => $email,'password' => $password, 'is_active' => User::ACTIVE], $remember)) {
            return redirect()->route('users.index')->with('success','Login admin successfully');
        }
        return redirect()->route('users.getlogin')->with('fail','Login admin failed');
    }

    /**
     * Logout to the admin page.
     *
     * @return view
     */
    public function logout()
    {
        Auth::logout();
        return view('admin.auth.login');
    }
}
