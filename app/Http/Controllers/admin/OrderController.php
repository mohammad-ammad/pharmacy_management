<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrder(){
        return view('admin.pages.view-order');
    }
    public function editOrder(){
        return view('admin.pages.edit-order');
    }
}
