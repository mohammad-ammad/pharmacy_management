<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function viewForm(){
        return view('admin.pages.view-doctor');
    }
    public function addDoctor(){
        return view ('admin.pages.add-doctor');
    }
    public function editDoctor(){
        return view ('admin.pages.edit-doctor');
    }
}
