<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Http\Request;

class LoginDashboardController extends Controller
{ 
    // protected $redirectTo = '/dashboard';

    // public function __construct()
    // {
    //  $this->middleware('guest')->except('logout');
    // }
    public function showLoginForm(){
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        //redirect according to roles..
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role_id == 1) 
            {
                return redirect()->route('admin.pages.dashboard');
            }
            elseif ($user->role_id == 2) 
            {
                return redirect()->route('user.Welcome');
            }
            elseif ($user->role_id == 3) 
            {
                return redirect()->route('user.Welcome');
            }
        }
            else
            {
                return redirect()->route('admin.login')->with('error', 'Invalid credentials');
            }
    }
    public function showDashboard(){
        return view('admin.pages.dashboard');
    }
    public function index(){
        return view('user.Welcome');
    }
    public function logout(Request $request)
{
    Auth::logout();

    return redirect('admin.login'); 
}
}
