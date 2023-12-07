<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function showForm(){
        return view('admin.pages.view-patient');
    }
    public function addPatient(){
        return view('admin.pages.add-patient');
    }
    public function editPatient(){
        return view('admin.pages.edit-patient');
    }
}
