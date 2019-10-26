<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use Illuminate\Support\Facades\Auth;
use App\Admin;

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
//         \Config::set('jwt.user', Admin::class);
//         \Config::set('auth.providers', ['users' => [
//         		'driver' => 'eloquent',
//         		'model' => Admin::class,
//         ]]);
    }

    public function login(Request $request)
    {
    	Auth::shouldUse('admins');
    	\DB::enableQueryLog();
	    	echo \Tymon\JWTAuth\Facades\JWTAuth::attempt($request->only(['email', 'password']));
	    	echo "<pre>"; print_r(\DB::getQueryLog()); exit;
    }

    public function login1(Request $request)
    {
	    	$this->validateLogin($request);

	    	// If the class is using the ThrottlesLogins trait, we can automatically throttle
	    	// the login attempts for this application. We'll key this by the username and
	    	// the IP address of the client making these requests into this application.
	    	if (method_exists($this, 'hasTooManyLoginAttempts') &&
    			$this->hasTooManyLoginAttempts($request)) {
    				$this->fireLockoutEvent($request);

    				return $this->sendLockoutResponse($request);
    			}

    			\DB::enableQueryLog();
    			echo $token = $this->attemptLogin($request);
    			echo "<pre>"; print_r(\DB::getQueryLog()); exit;

    			if ($this->attemptLogin($request)) {
    				return $this->sendLoginResponse($request);
    			}

    			// If the login attempt was unsuccessful we will increment the number of attempts
    			// to login and redirect the user back to the login form. Of course, when this
    			// user surpasses their maximum number of attempts they will get locked out.
    			$this->incrementLoginAttempts($request);

    			return $this->sendFailedLoginResponse($request);
    }

    protected function guard()
    {
    	return \Auth::guard('admins');
    }
}
