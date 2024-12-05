@extends('layout')

@section('container')
<div class="container mx-auto p-6">
  <h2 class="text-4xl font-bold text-center mb-6">Edit Pemesanan</h2>

  <form action="{{ route('orders.update', $order->id) }}" method="POST" class="max-w-lg mx-auto p-4 border border-gray-300 rounded-lg shadow-lg bg-white">
    @csrf
    @method('PUT') <!-- Gunakan PUT untuk update -->

    <!-- Form fields dengan nilai yang sudah ada di database -->
    <div class="mb-4">
      <label for="name" class="block text-lg font-semibold text-gray-700">Nama Lengkap</label>
      <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" value="{{ $order->name }}" required>
    </div>

    <div class="mb-4">
      <label for="email" class="block text-lg font-semibold text-gray-700">Email</label>
      <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" value="{{ $order->email }}" required>
    </div>

    <div class="mb-4">
      <label for="phone" class="block text-lg font-semibold text-gray-700">Nomor Telepon</label>
      <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" value="{{ $order->phone }}" required>
    </div>

    <div class="mb-4">
      <label for="drink" class="block text-lg font-semibold text-gray-700">Pilih Minuman</label>
      <select id="drink" name="drink" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" required>
        <option value="milk_tea" {{ $order->drink == 'milk_tea' ? 'selected' : '' }}>Milk Tea</option>
        <option value="fruit_tea" {{ $order->drink == 'fruit_tea' ? 'selected' : '' }}>Chamomile Tea Latte</option>
        <option value="matcha_tea" {{ $order->drink == 'matcha_tea' ? 'selected' : '' }}>Matcha Milk Tea</option>
        <option value="bubble_tea" {{ $order->drink == 'bubble_tea' ? 'selected' : '' }}>Choco Mint Tea Latte</option>
        <option value="lavender_tea" {{ $order->drink == 'lavender_tea' ? 'selected' : '' }}>Lavender Tea Latte</option>
        <option value="charcoal_tea" {{ $order->drink == 'charcoal_tea' ? 'selected' : '' }}>Charcoal Tea Latte</option>
      </select>
    </div>

    <div class="mb-4">
      <label for="quantity" class="block text-lg font-semibold text-gray-700">Jumlah</label>
      <input type="number" id="quantity" name="quantity" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" min="1" value="{{ $order->quantity }}" required>
    </div>

    <div class="mb-4">
      <label for="address" class="block text-lg font-semibold text-gray-700">Alamat Pengiriman</label>
      <textarea id="address" name="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" rows="4" required>{{ $order->address }}</textarea>
    </div>

    <!-- Tombol Submit -->
    <div class="flex justify-center">
      <button type="submit" class="px-6 py-3 bg-teal-500 text-white rounded-lg hover:bg-teal-700 focus:outline-none">
        Update Order
      </button>
    </div>
  </form>
</div>
@endsection
