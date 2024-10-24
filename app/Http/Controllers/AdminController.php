<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function index()
    {
        if(Auth::check()){
            return view('admin.dashboard');

        }
        return redirect()->route('login');
    }
}