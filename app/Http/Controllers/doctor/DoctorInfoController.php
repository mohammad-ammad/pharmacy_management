<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorInfo;

class DoctorInfoController extends Controller
{
    public function create()
    {
        $doctorInfo = DoctorInfo::where('user_id', auth()->id())->first();

        if ($doctorInfo) {
            return redirect()->route('doctor.info.edit', ['id' => $doctorInfo->id]);
        }
        return view('doctor.pages.Doctor-info');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'doctor_reg_id' => $request->input('doctor_reg_info'),
            'licence' => $request->input('licence'),
        ]);

        $validatedData['user_id'] = auth()->id();

        DoctorInfo::create($validatedData);
        return redirect()->route('doctor.info.edit', ['id' => auth()->id()])->with('success', 'Profile created successfully.');
    }
    public function edit($id)
    {
        $doctorInfo = DoctorInfo::findOrFail($id);
        if ($doctorInfo->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('doctor.pages.edit-doctor-info', compact('doctorInfo'));
    }

    public function update(Request $request, $id)
    {
        $doctorInfo = DoctorInfo::findOrFail($id);

        if ($doctorInfo->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        $validatedData = $request->validate([
            'doctor_reg_id' => $request->input('doctor_reg_info'),
            'licence' => $request->input('licence'),
        ]);
        $doctorInfo->update($validatedData);

        return redirect()->route('doctor.info.edit', ['id' => $id])->with('success', 'Profile updated successfully.');
    }
}  
