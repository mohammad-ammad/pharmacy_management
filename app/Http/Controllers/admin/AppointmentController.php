<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function showList()
{
    return view('admin.pages.view-appointment');
}
    public function addAppointment(){
        return view('admin.pages.add-appointment');
    }
    public function editAppointment(){
        return view('admin.pages.edit-appointment');
    }
}
