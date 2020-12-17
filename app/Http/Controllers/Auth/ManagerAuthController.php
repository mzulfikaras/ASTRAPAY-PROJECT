<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class ManagerAuthController extends Controller
{
    use AuthenticatesUsers;
    
    // protected $redirectTo = '/dashboard';

    
    protected $maxAttempts = 3;
    protected $decayMinutes = 5;


    public function __construct()
    {
        $this->middleware('guest:manager')->except('postLogout');
    }

    protected function guard()
    {
        return Auth::guard('manager');
    }

    public function getLogin()
    {
        return view('auth.manager.login');
    }

    public function username()
    {
        return 'nip';
    }


    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required|min:5',
            'password' => 'required|min:5'
        ]);

        if (auth()->guard('manager')->attempt($request->only('nip', 'password'))) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return redirect()->intended('/manager/dashboard');
        }else {
            $this->incrementLoginAttempts($request);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }


    public function postLogout(Request $request)
    {
        // Get the session key for this user
        $sessionKey = $this->guard()->getName();

        // Logout current user by guard
        $this->guard()->logout();

        // Delete single session key (just for this user)
        $request->session()->forget($sessionKey);

        return redirect()->route('manager.login');
    }
}