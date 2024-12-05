<?php 
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan produk
    public function index()
    {
        $products = Product::all(); // Ambil semua produk
        return view('produk', compact('products')); // Kirim produk ke view
    }

    // Menyimpan produk
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Membuat objek produk baru
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        // Menyimpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        // Menyimpan produk ke database
        $product->save();

        // Redirect kembali ke halaman produk dengan pesan sukses
        return redirect()->route('produk')->with('success', 'Produk berhasil ditambahkan!');
    }
}
