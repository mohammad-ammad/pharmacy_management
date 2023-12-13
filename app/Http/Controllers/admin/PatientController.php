<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    //view function
    public function showForm(){
        $patients = User::where('role_id', 3)->get();
        return view('admin.pages.view-patient')->with('patients', $patients);
    }
    public function showaddForm(){
        return view('admin.pages.add-patient');
    }
    //create function
    public function addPatient(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);
        $deafultpassword = 'password';
        User::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'password' => bcrypt($deafultpassword),
          'role_id' => 3,
      ]); 
        return redirect()->route('admin.pages.view.patient')->withSuccess('Patient Added Successfully.');
    }
    //edit function
    public function editPatient($id){
        $patient = User::findorFail($id);

        return view('admin.pages.edit-patient',compact('patient'));
    }
    //update function
    public function updatePatient(Request $request, $id)
    {
        $patient = User::find($id);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string'
        ]);
        $patient->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        ]);
        return redirect()->route('admin.pages.view.patient')->with('Patient Record Updated Successfully.');
    }
    //delete function
    public function deletePatient(Request $request, $id)
    {
    $user = User::find($id);
    $user->delete();
    return redirect()->route('admin.pages.view.patient')->with('Patient Record Deleted Successfully.');
}
}
