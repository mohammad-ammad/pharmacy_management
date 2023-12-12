<?php

namespace App\Http\Controllers\admin;
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
        return view('admin.pages.view-product', ['products' => $products]);
}
//add product
public function showAddForm()
{
    return view('admin.pages.add-product');
}

public function addProduct(Request $request)
{
    $request->validate([
        'product_name' => 'required|string',
        'product_description' => 'required|string',
        'quantity' => 'required|integer', 
        'price' => 'required|numeric',
    ]);

    $userId = Auth::id();

    Product::create([
        'user_id' => $userId,
        'product_name' => $request->input('product_name'),
        'product_description' => $request->input('product_description'),
        'quantity' => $request->input('quantity'),
        'price' => $request->input('price'),
    ]);

    return redirect()->route('admin.pages.view-product')->with('success', 'Product added successfully');
}
//edit product
public function editProduct(Request $request, $productId)
{
    $product = Product::find($productId);

    if (!$product) {
        return redirect()->route('admin.pages.dashboard.view-product')->with('error', 'Product not found');
    }
    return view('admin.pages.edit-product', ['product' => $product]);
}
//update product 
public function updateProduct(Request $request, $productId)
{
    $product = Product::find($productId);

    if (!$product) {
        return redirect()->route('admin.pages.view-product')->with('error', 'Product not found');
    }

    $request->validate([
        'product_name' => 'required|string',
        'product_description' => 'required|string',
        'quantity' => 'required|integer', 
        'price' => 'required|numeric',
    ]);
    $product->update([
        'product_name' => $request->input('product_name'),
        'product_description' => $request->input('product_description'),
        'quantity' => $request->input('quantity'),
        'price' => $request->input('price'),
    ]);

    return redirect()->route('admin.pages.view-product')->with('success', 'Product Updated successfully');
}
//delete product
public function deleteProduct($productId)
{
    $product = Product::find($productId);

    if ($product) {
        $product->delete();
        return redirect()->route('admin.pages.view-product')->with('success', 'Product Record Deleted Successfully');
    }
    return redirect()->route('admin.pages.view-product')->with('error', 'Product not found');
}
}