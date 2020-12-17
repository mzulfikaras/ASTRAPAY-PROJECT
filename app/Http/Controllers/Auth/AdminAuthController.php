<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    use AuthenticatesUsers;
    
    // protected $redirectTo = '/dashboard';

    
    protected $maxAttempts = 3;
    protected $decayMinutes = 5;


    public function __construct()
    {
        $this->middleware('guest:admin')->except('postLogout');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function getLogin()
    {
        return view('auth.admin.login');
    }

    public function username()
    {
        return 'nip';
    }


    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required|min:2',
            'password' => 'required|min:5'
        ]);

        if (auth()->guard('admin')->attempt($request->only('nip', 'password'))) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return redirect()->intended('/admin/dashboard');
        } else {
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

        // After logout, redirect to login screen again
        return redirect()->route('admin.login');
    }
}
