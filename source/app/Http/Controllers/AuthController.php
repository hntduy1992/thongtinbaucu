<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login()
    {
        return Inertia::render('LoginPage', []);
    }

    /**
     * @throws ValidationException
     */
    public function loginHandle(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'username' => ['required'],
            'password' => ['required'],
        ], [
            'username.required' => 'Vui lòng không bỏ trống',
            'password.required' => 'Vui lòng không bỏ trống',
        ])->validated();
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors(['username', 'Tài khoản hoặc mật khẩu không đúng']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
