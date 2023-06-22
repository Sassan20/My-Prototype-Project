<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }
    public function cekLogin( Request $request ){
        $user = \App\Models\User::Where('email', $request->email)->first();
        if(!Hash::check($request->password, $user?->password)){
            throw ValidationException::withMessages([
                'Password Salah' => 'Email Atau Password Salah!',
                ]);
        }
        auth::login($user, $request->remember);
        return to_route('dashboard');
    }
}
