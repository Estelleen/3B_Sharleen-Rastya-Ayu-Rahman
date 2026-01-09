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

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            $user = Auth::user();
            return $user->role_id == 1 ? redirect('/admin') : redirect('/tutor');
        }

    return back()->with('failed', 'Wrong Email or Password!');
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
        ]);

            $email = $request->email;
            $role_id = null;
            $role_name = '';

            if(str_contains($email, '@admin')){
                $role_id = 1;
                $role_name = 'admin';
            }elseif(str_contains($email, '@tutor')){
                $role_id = 2;
                $role_name = 'tutor';
            }else{
                return back()->withErrors(['email' => 'Use email with @admin or @tutor domains'])->withInput();
            }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $role_id,
            'role' => $role_name,
            'status'=> "active",
        ]);

        Auth::login($user);
        return $user->role_id == 1 ? redirect('/admin') : redirect('/tutor');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
        
        
        