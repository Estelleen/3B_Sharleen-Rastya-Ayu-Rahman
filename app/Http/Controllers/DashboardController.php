<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $students = Students::all();
        
        if (auth()->user()->role === 'admin'){
            return view('adminView');
        }
    }
}
