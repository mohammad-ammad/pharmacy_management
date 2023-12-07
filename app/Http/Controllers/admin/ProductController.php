<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showList()
{
    return view('admin.pages.view-product');
}
    public function addProduct(){
        return view('admin.pages.add-product');
    }
    public function editProduct(){
        return view('admin.pages.edit-product');
    }
}
