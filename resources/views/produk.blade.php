@extends('layout')
@section('container')
<div class="carousel w-full overflow-hidden relative">
  <!-- Wrapper untuk semua item -->
  <div class="carousel-items flex transition-transform duration-500">
    <!-- slide1 -->
    <div class="carousel-item w-full flex-shrink-0">
      <img src="{{asset('images/slogan.jpeg')}}" class="w-full" />
    </div>
    <!-- slide2 -->
    <div class="carousel-item w-full flex-shrink-0">
      <img src="{{asset('images/ch.jpeg')}}" class="w-full" />
    </div>
    <!-- slide3 -->
    <div class="carousel-item w-full flex-shrink-0">
      <img src="{{asset('images/st.jpeg')}}" class="w-full" />
    </div>
  </div>
</div>

<!-- JavaScript untuk menggerakkan carousel -->
<script>
  let currentIndex = 0; // Slide yang sedang aktif
  const items = document.querySelectorAll('.carousel-item'); // Semua slide
  const totalItems = items.length; // Total jumlah slide

  // Fungsi untuk pindah ke slide berikutnya
  function goToNextSlide() {
    currentIndex = (currentIndex + 1) % totalItems; // Beralih ke slide berikutnya atau ulang ke awal
    updateCarouselPosition();
  }

  // Fungsi untuk memperbarui posisi carousel
  function updateCarouselPosition() {
    const carousel = document.querySelector('.carousel-items');
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`; // Geser carousel
  }

  // Set interval agar slide berpindah otomatis setiap 3 detik
  setInterval(goToNextSlide, 3000);
</script>


<section class="bg-[#fbefee] py-12">
  <div class="container mx-auto px-4">
    <!-- Header Section -->
    <div class="text-center mb-8">
    <h2 class="text-4xl font-bold text-gray-800" style="font-family: 'Playfair Display', serif;">
        Produk Kami
      </h2>
      <p class="text-gray-600 mt-4 text-lg" style="font-family: 'Roboto', sans-serif;">
        Jelajahi cita rasa Tea Bliss, dengan berbagai varian yang disuguhkan.
      </p>
    </div>
    
    <!-- Product Grid -->
    <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
     <!-- Product 1 -->
<div class="bg-white rounded-lg shadow-md overflow-hidden">
  <img class="w-full h-48 object-cover" src="{{ asset('images/Fresh Strawberry Milkshakes.jpg')}}" alt="Product 1">
  <div class="p-4">
    <h3 class="text-sm font-bold text-gray-800">Strawberry Milkshake</h3>
    <p class="text-gray-600 mt-2 text-sm">Kesegaran buah dan manisnya susu.</p>
    <div class="mt-3 flex items-center space-x-2">
      <!-- Icon and Price wrapped in a flex container -->
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-600">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
      </svg>
      <span class="text-lg font-bold text-green-600">Rp 15.000</span>
    </div>
    <button class="w-full mt-4 py-1 bg-stone-500 text-white font-semibold rounded hover:bg-stone-300 text-sm transition">
      Beli Sekarang
    </button>
  </div>
</div>

      <!-- Product 2 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="{{ asset('images/Honey Chamomile Tea Latte.jpg')}}" alt="Product 2">
        <div class="p-4">
          <h3 class="text-sm font-bold text-gray-800">Chamomile TeaLatte</h3>
          <p class="text-gray-600 mt-2 text-sm">Wanginya bunga chamomile.</p>
          <div class="mt-3 flex items-center space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-600">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
      </svg>
            <span class="text-lg font-bold text-green-600">Rp 12.000</span>
          </div>
          <button class="w-full mt-4 py-1 bg-stone-500 text-white font-semibold rounded hover:bg-blue-600 text-sm transition">
            Beli Sekarang
          </button>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="{{ asset('images/Taro.jpeg')}}" alt="Product 3">
        <div class="p-4">
          <h3 class="text-sm font-bold text-gray-800">Taro Milktea</h3>
          <p class="text-gray-600 mt-2 text-sm">Creamy, manis, segar..</p>
          <div class="mt-3">
            <span class="text-lg font-bold text-green-600">Rp 12.000</span>
          </div>
          <button class="w-full mt-4 py-1 bg-stone-500 text-white font-semibold rounded hover:bg-blue-600 text-sm transition">
            Beli Sekarang
          </button>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="{{ asset('images/Greentea.jpeg')}}" alt="Product 4">
        <div class="p-4">
          <h3 class="text-sm font-bold text-gray-800">Green Tea</h3>
          <p class="text-gray-600 mt-2 text-sm">Aromatik, lembut, menyegarkan.</p>
          <div class="mt-3">
            <span class="text-lg font-bold text-green-600">Rp 13.000</span>
          </div>
          <button class="w-full mt-4 py-1 bg-stone-500 text-white font-semibold rounded hover:bg-blue-600 text-sm transition">
            Beli Sekarang
          </button>
        </div>
      </div>
      <!-- Product 5 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="{{ asset('images/Milktea origin.jpeg')}}" alt="Product 1">
        <div class="p-4">
          <h3 class="text-sm font-bold text-gray-800">Milk Tea</h3>
          <p class="text-gray-600 mt-2 text-sm">Lembut, manis, klasik..</p>
          <div class="mt-3">
            <span class="text-lg font-bold text-green-600">Rp 10.000</span>
          </div>
          <button class="w-full mt-4 py-1 bg-stone-500 text-white font-semibold rounded hover:bg-blue-600 text-sm transition">
            Beli Sekarang
          </button>
        </div>
      </div>

      <!-- Product 6 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="{{ asset('images/Mint latte.jpeg')}}" alt="Product 2">
        <div class="p-4">
          <h3 class="text-sm font-bold text-gray-800">choco Mint Tea Latte</h3>
          <p class="text-gray-600 mt-2 text-sm">Segar, cokelat, dingin.</p>
          <div class="mt-3">
            <span class="text-lg font-bold text-green-600">Rp 12.000</span>
          </div>
          <button class="w-full mt-4 py-1 bg-stone-500 text-white font-semibold rounded hover:bg-blue-600 text-sm transition">
            Beli Sekarang
          </button>
        </div>
      </div>

      <!-- Product 7 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="{{ asset('images/Lavender.jpeg')}}" alt="Product 3">
        <div class="p-4">
          <h3 class="text-sm font-bold text-gray-800">Lavender Tea Latte</h3>
          <p class="text-gray-600 mt-2 text-sm">Floral, lembut, alami.</p>
          <div class="mt-3">
            <span class="text-lg font-bold text-green-600">Rp 15.000</span>
          </div>
          <button class="w-full mt-4 py-1 bg-stone-500 text-white font-semibold rounded hover:bg-blue-600 text-sm transition">
            Beli Sekarang
          </button>
        </div>
      </div>

      <!-- Product 8 -->
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="{{ asset('images/Charcoal.jpeg')}}" alt="Product 4">
        <div class="p-4">
          <h3 class="text-sm font-bold text-gray-800">Charcoal Tea Latte</h3>
          <p class="text-gray-600 mt-2 text-sm">Unik, rasa yang kuat.</p>
          <div class="mt-3">
            <span class="text-lg font-bold text-green-600">Rp 15.000</span>
          </div>
          <button class="w-full mt-4 py-1 bg-stone-500 text-white font-semibold rounded hover:bg-blue-600 text-sm transition">
            Beli Sekarang
          </button>
        </div>
      </div>
    </div>
  </div>
<!-- resources/views/produk.blade.php -->
<section class="bg-[#fbefee] py-12">
  <div class="container mx-auto px-4">
    <!-- Header Section -->
    <div class="text-center mb-8">
      <h2 class="text-4xl font-bold text-gray-800" style="font-family: 'Playfair Display', serif;">
        Produk Baru Kami
      </h2>
      <p class="text-gray-600 mt-4 text-lg" style="font-family: 'Roboto', sans-serif;">
        Jelajahi cita rasa Tea Bliss, dengan berbagai varian rasa baru yang disuguhkan.
      </p>
    </div>

    <!-- Grid Produk -->
    <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      @foreach($products as $product)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
          <div class="p-4">
            <h3 class="text-sm font-bold text-gray-800">{{ $product->name }}</h3>
            <p class="text-gray-600 mt-2 text-sm">{{ $product->description }}</p>
            <div class="mt-3 flex items-center space-x-2">
              <span class="text-lg font-bold text-green-600">Rp {{ number_format($product->price, 2, ',', '.') }}</span>
            </div>
            <button class="w-full mt-4 py-1 bg-stone-500 text-white font-semibold rounded hover:bg-stone-300 text-sm transition">
              Beli Sekarang
            </button>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

</section>

@endsection