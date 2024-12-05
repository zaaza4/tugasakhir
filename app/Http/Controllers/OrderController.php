<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Import the Post model

class OrderController extends Controller
{
    // Method to display the order creation form
    public function create()
    {
        return view('order.create');  // Return the order form view
    }

    // Method to store the order in the database
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'drink' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'address' => 'required|string',
        ]);

        // Create and save the order
        Post::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'drink' => $request->drink,
            'quantity' => $request->quantity,
            'address' => $request->address,
        ]);

        // Redirect with a success message
        return redirect()->route('orders.create')->with('success', 'Order successfully placed!');
    }

    // Method to display all orders
    public function index()
    {
        $orders = Post::all(); // Get all orders
        return view('order.index', compact('orders')); // Return the orders view
    }

    // Method to display the edit form for an order
    public function edit($id)
    {
        $order = Post::findOrFail($id);  // Find the order by id
        return view('order.edit', compact('order'));  // Return the edit form view
    }

    // Method to update an order
    public function update(Request $request, $id)
{
    // Validasi data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'drink' => 'required|string',
        'quantity' => 'required|integer|min:1',
        'address' => 'required|string',
    ]);

    // Cari dan update pesanan
    $order = Post::findOrFail($id);
    $order->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'drink' => $request->drink,
        'quantity' => $request->quantity,
        'address' => $request->address,
    ]);

    // Redirect setelah update
    return redirect()->route('orders.index')->with('success', 'Pesanan berhasil diperbarui!');
}

    // Method to delete an order
    public function destroy($id)
    {
        $order = Post::findOrFail($id);  // Find the order by id
        $order->delete();  // Delete the order

        // Redirect with a success message
        return redirect()->route('orders.index')->with('success', 'Order successfully deleted!');
    }
}