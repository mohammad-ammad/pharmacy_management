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

                return redirect()->route('doctor.doctor.dashboard');
            }
            elseif ($user->role_id == 3) 
            {
                // dd($user);
                return redirect()->route('patient.patient.dashboard');
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
    public function indexDoctor(){
        return view('doctor.doctor-dashboard');
    }
    public function indexPatient(){
        return view('patient.patient-dashboard');
    }
    public function logout(Request $request)
{
    Auth::logout();

    return redirect('admin.login'); 
}
}
