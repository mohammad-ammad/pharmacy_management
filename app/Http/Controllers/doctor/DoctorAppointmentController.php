<?php

namespace App\Http\Controllers\doctor;
use App\Http\Controllers\Controller;
use App\Models\Appointment;

use Illuminate\Http\Request;

class DoctorAppointmentController extends Controller
{
    public function editAppointmentStatus($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('doctor.edit-appointment-status', compact('appointment'));
    }
    
    public function updateAppointmentStatus(Request $request, $id)
    {
        $request->validate([
            'status' => ['required', Rule::in(['pending', 'accepted', 'rejected'])],
        ]);
    
        $appointment = Appointment::findOrFail($id);
        $appointment->update(['status' => $request->input('status')]);
    
        return redirect()->route('doctor.appointments')->with('success', 'Appointment status updated successfully.');
    }
    
    
}
