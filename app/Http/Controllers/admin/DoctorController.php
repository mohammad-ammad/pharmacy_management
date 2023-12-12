<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function viewForm(){
        $user = User::where('role_id', 2)->get();
        return view('admin.pages.view-doctor')->with('user', $user);
    }
    public function showAddForm()
{
    return view('admin.pages.add-doctor');
}
    public function addDoctor(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required|numeric',
        ]);

        // Check if the role_id is valid (you can customize this logic)
        if ($request->input('role_id') != 2) {
            return redirect()->back()->with('error', 'Please set role_id 2 for Doctor.');
        }

        // Create a new user with the provided data
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_id' => $request->input('role_id'),
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.pages.view.doctor')->with('Doctor added successfully.');
    }
    public function editDoctor($id)
{
    // Find the doctor by ID
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
