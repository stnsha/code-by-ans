<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function sign_in_page()
    {
        if (auth()->check()) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('welcome');
        }
    }

    public function validate_login(Request $request)
    {
        if (auth()->check()) {
            return redirect()->route('admin.dashboard');
        } else {
            $validated = request()->validate(
                [
                    'email' => ['email'],
                    'password' => ['string'],
                ]
                // [
                //     'email.required' => 'Email is in incorrect form',
                //     'password.numeric' => 'Numbers only!',
                // ]
            );

            if ($validated && Auth::attempt($validated)) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()
                    ->route('auth.login')
                    ->with('fail', 'Incorrect email or password.');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        return redirect()->route('auth.login');
    }
}