<?php

namespace App\Http\Controllers\patient;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //show product list
    public function showList()
{
        $products = Product::all();
        return view('patient.pages.product', ['products' => $products]);
}
//add product
public function showAddForm()
{
    return view('admin.pages.add-product');
}
}