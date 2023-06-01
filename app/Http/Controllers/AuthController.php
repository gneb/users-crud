<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('public.login');
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only(['username', 'password']);
        $request->validated($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->is_admin == 1){
                return redirect()->intended('admin');
            }
            return redirect()->route('home');
        }
        return back()->withErrors([
            'username' => 'Wrong credentials.',
        ])->onlyInput('username');
    }
    public function logout(Request $request): RedirectResponse
    {
        if(csrf_token() != $request->query('csrf')){
            return back();
        }
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
     
        return redirect()->route('home');
    }
}
