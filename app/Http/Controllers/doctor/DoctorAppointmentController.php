<?php

namespace App\Http\Controllers\doctor;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\Models\Appointment;
use App\Models\User;

use Illuminate\Http\Request;

class DoctorAppointmentController extends Controller
{
    public function listAppointments()
{
    $appointments = Appointment::all();
    return view('doctor.pages.view-appointment', compact('appointments'));
}
    public function editAppointmentStatus($id)
    {
        $appointment = Appointment::findOrFail($id);
        $doctors = User::all();
        return view('doctor.pages.edit-appointment', compact('appointment' , 'doctors'));
    }
    public function updateAppointmentStatus(Request $request, $id)
    {
        $request->validate([
            'status' => ['required', Rule::in(['pending', 'accepted', 'rejected'])],
        ]);
    
        $appointment = Appointment::findOrFail($id);
        $appointment->update(['status' => $request->input('status')]);
    
        return redirect()->route('doctor.appointments.list')->with('success', 'Appointment status updated successfully.');
    }
    
    
}
