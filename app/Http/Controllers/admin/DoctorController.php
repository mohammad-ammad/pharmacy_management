<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //show view function
    public function viewForm(){
        $user = User::where('role_id', 2)->get();
        return view('admin.pages.view-doctor')->with('user', $user);
    }
    public function showAddForm()
{
    return view('admin.pages.add-doctor');
}
//create function
    public function addDoctor(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
        ]);
        $defaultpass = 'password';
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($defaultpass),
            'role_id' => 2,
        ]);
        return redirect()->route('admin.pages.view.doctor')->with('Doctor added successfully.');
    }
    //edit function
    public function editDoctor($id)
{
    $doctor = User::findOrFail($id);

    return view('admin.pages.edit-doctor', compact('doctor'));
}
//update function
public function updateDoctor(Request $request, $id)
{
    $user = User::find($id);
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|string',
    ]);
    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ]);
    return redirect()->route('admin.pages.view.doctor')->with('Doctor Record Successfully Updated');
}
//delete function
public function deleteDoctor(Request $request, $id)
{
    $user = User::find($id);
    $user->delete();
    return Redirect()->route('admin.pages.view.doctor')->with('Doctor Record Deleted successfully');
}
}
