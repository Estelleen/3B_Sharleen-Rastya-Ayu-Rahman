<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'admin') {
            return redirect('/admin'); 
        }
        }

    return back()->with('failed', 'Email atau Password salah!');
}

    
        public function register(Request $request){
           $request ->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50|unique:users',
            'password' => ['required',
            Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
        ],
            'password_confirmation' => 'required|same:password',
        ]); 

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
            'status'=> "active",
        ]);

        Auth::login($user);
        return redirect('/admin')->with('success', 'Selamat datang!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
        
        
        