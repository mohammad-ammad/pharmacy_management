<?php
namespace App\Http\Controllers\patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class OrderPlaceController extends Controller
{
    public function placeOrder(Request $request, $productId)
    {
        // Retrieve the authenticated user's ID
        $patientId = auth()->id();
        $id = User::find($patientId);

        $product = Product::find($productId);

        if (!$product) {
            return redirect()->route('patient.pages.product')->with('error', 'Selected product not found.');
        }
        Order::create([
            'patient_id' => $patientId,
            'product_id' => $product->id,
            'quantity' => 1, 
            'price' => $product->price, 
            'status' => 'pending', 
            'payment_method' => 'online',
        ]);

        return redirect()->route('patient.pages.product')->with('success', 'Order placed successfully.');
    }
}