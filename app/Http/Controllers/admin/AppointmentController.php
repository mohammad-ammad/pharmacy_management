<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Appointment;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function viewAppointments()
{
    $appointments = Appointment::all();
    return view('admin.pages.view-appointment', compact('appointments'));
}
    
}
