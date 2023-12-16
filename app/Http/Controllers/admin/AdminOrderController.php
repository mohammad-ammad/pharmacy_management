<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Validation\Rule;

class AdminOrderController extends Controller
{
    //List All orders
    public function ListOrder(){
        $orders = Order::with('product', 'patient')->get();
        return view('admin.pages.AdminOrder-view', compact('orders'));
    }
    //Edit Order
    public function editOrder(Request $request, $id)
    {
        $order = Order::with('product' , 'patient')->find($id);
        return view('admin.pages.AdminOrder-edit', compact('order'));
    }
    // Update Order
public function updateOrder(Request $request, $id)
{
    $request->validate([
        'status' => [
            Rule::in(['pending', 'accepted', 'rejected', 'fulfilled'])
        ],
    ]);

    $order = Order::findOrFail($id);
    $order->update([
        'status' => $request->input('status'),
    ]);

    return redirect()->route('admin.pages.AdminOrder.view')->with('success', 'Order Updated Successfully');
}
//delete fxn
public function deleteOrder($id)
{
    $order = Order::findOrFail($id);
    $order->delete();

    return redirect()->route('admin.pages.AdminOrder.view')->with('success', 'Order deleted successfully.');
}
}
