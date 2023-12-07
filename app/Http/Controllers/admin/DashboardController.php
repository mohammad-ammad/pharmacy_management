<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showLoginForm(){
        return view('admin.login');
    }
    public function login(Request $request){
        return redirect()->route('admin.dashboard');
    }
    public function showDashboard(){
        return view('admin.pages.dashboard');
    }
}
