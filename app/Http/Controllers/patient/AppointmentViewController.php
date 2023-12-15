<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
class AppointmentViewController extends Controller
{
    public function viewAppointment()
    {
        $patientId = Auth::id();
        $appointments = Appointment::where('patient_id', $patientId)->get();
        return view('patient.pages.view-appointment', compact('appointments'));
    }
    public function addAppointment(){
        $doctors = User::where('role_id', 2)->get();
        $patients = User::where('role_id', 3)->get();
        return view('patient.pages.add-appointment', compact('doctors', 'patients'));
    }
    public function AddNewAppointment(Request $request){
        $request->validate([
            'doctor_id' => 'required|exists:users,id,role_id,2', 
            'description' => 'required|string',
            'appointment_date' => 'required|date',
        ]);
        $patientId = Auth::id();
        $doctorId = $request->input('doctor_id');
        $description = $request->input('description');
        $appointmentDate = $request->input('appointment_date');

        Appointment::create([
            'patient_id' => $patientId,
            'doctor_id' => $doctorId,
            'description' => $description,
            'status' => 'pending', 
            'appointment_date' => $appointmentDate,
        ]);
        return redirect()->route('patient.view.appointment')->with('Appointment Added Successfully.');
    }
}
