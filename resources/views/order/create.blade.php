@extends('layout')

@section('container')
<div class="container mx-auto p-6">
  <h2 class="text-4xl font-bold text-center mb-6" style="font-family: 'Playfair Display', serif;">Pemesanan Tea Bliss</h2>

  <!-- Display success message if it exists -->
  @if(session('success'))
    <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  <!-- Gambar Section (Placed at the top) -->
  <div class="text-center mb-8">
    <img src="{{ asset('images/sinis.jpeg') }}" alt="Tea Bliss" class="w-48 h-auto rounded-lg mx-auto">
    <p class="mt-4 text-xl font-semibold text-gray-800">Nikmati teh terbaik dari Tea Bliss, </p>
    <p class="mt-4 text-xl font-semibold text-gray-800">tersedia berbagai varian rasa yang lezat dan menyegarkan!</p>
  </div>

  <div class="flex justify-center items-center gap-10">
    <!-- Form Section -->
    <form action="{{ route('orders.store') }}" method="POST" class="max-w-lg p-4 border border-gray-300 rounded-lg shadow-lg bg-white w-full md:w-1/2">
      @csrf <!-- Token CSRF untuk keamanan -->

      <div class="mb-4">
        <label for="name" class="block text-lg font-semibold text-gray-700">Nama Lengkap</label>
        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" required>
      </div>

      <div class="mb-4">
        <label for="email" class="block text-lg font-semibold text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" required>
      </div>

      <div class="mb-4">
        <label for="phone" class="block text-lg font-semibold text-gray-700">Nomor Telepon</label>
        <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" required>
      </div>

      <div class="mb-4">
        <label for="drink" class="block text-lg font-semibold text-gray-700">Pilih Minuman</label>
        <select id="drink" name="drink" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" required>
          <option value="milk_tea">Milk Tea</option>
          <option value="fruit_tea">Chamomile Tea Latte</option>
          <option value="matcha_tea">Matcha Milktea</option>
          <option value="choco_mint_tea">Choco Mint Tea Latte</option>
          <option value="lavender_tea">Lavender Tea Latte</option>
          <option value="charcoal_tea">Charcoal Tea Latte</option>
        </select>
      </div>

      <div class="mb-4">
        <label for="quantity" class="block text-lg font-semibold text-gray-700">Jumlah</label>
        <input type="number" id="quantity" name="quantity" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" min="1" value="1" required>
      </div>

      <div class="mb-4">
        <label for="address" class="block text-lg font-semibold text-gray-700">Alamat Pengiriman</label>
        <textarea id="address" name="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-teal-500" rows="4" required></textarea>
      </div>

      <div class="flex justify-center">
          <button type="submit" class="px-6 py-3 bg-teal-500 text-white rounded-lg hover:bg-teal-700 transition-all duration-200 ease-in-out focus:outline-none">
            Pesan Sekarang
          </button>
        </div>
      </div>
    </form>

  </div>
</div>
@endsection
