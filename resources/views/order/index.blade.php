<!-- resources/views/order/index.blade.php -->

@extends('layout') <!-- Menggunakan layout yang ada, misalnya layout 'index' -->

@section('container')
<!-- Gambar Section (Placed at the top) -->
<div class="text-center mb-8">
    <img src="{{ asset('images/sinistea.jpeg') }}" alt="Tea Bliss" class="w-48 h-auto rounded-lg mx-auto">
</div>
<div class="container mx-auto p-6">
    <div class="text-center mb-8">
        <h2 class="text-4xl font-bold text-[#bd9172]" style="font-family: 'Playfair Display', serif;">Daftar Pesanan</h2>
    </div>
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b">Nama</th>
                <th class="px-4 py-2 border-b">Email</th>
                <th class="px-4 py-2 border-b">Nomor Telepon</th>
                <th class="px-4 py-2 border-b">Minuman</th>
                <th class="px-4 py-2 border-b">Jumlah</th>
                <th class="px-4 py-2 border-b">Alamat</th>
                <th class="px-4 py-2 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
    <tr>
        <td class="px-4 py-2 border-b">{{ $order->name }}</td>
        <td class="px-4 py-2 border-b">{{ $order->email }}</td>
        <td class="px-4 py-2 border-b">{{ $order->phone }}</td>
        <td class="px-4 py-2 border-b">{{ $order->drink }}</td>
        <td class="px-4 py-2 border-b">{{ $order->quantity }}</td>
        <td class="px-4 py-2 border-b">{{ $order->address }}</td>
        <td class="px-6 py-4">
            <a href="{{ route('orders.edit', $order->id) }}" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 shadow-lg shadow-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Edit</a>
        </td>
        <td>
            <form method="POST" action="{{ route('orders.destroy', $order->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-white bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Hapus</button>
            </form>
        </td>
    </tr>
@endforeach
        </tbody>
    </table>
</div>

@endsection
