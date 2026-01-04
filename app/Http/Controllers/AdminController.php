<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Harus Login!');
        }
        if (auth()->user()->role !== 'admin'){
            return redirect('/admin')->whit('error', 'You dont have any access');
        }

        return view('adminView');
    }
}
