@extends('layout')
@section('container')

<div class="carousel w-full">
  <div id="carousel" class="carousel-items w-full">
    <!-- Slide 1 -->
    <div class="carousel-item w-full">
      <img src="{{ asset('images/bliss.jpeg') }}" class="w-full" />
    </div>
    <!-- Slide 2 -->
    <div class="carousel-item w-full">
      <img src="{{ asset('images/bless.jpeg') }}" class="w-full" />
    </div>
  </div>
</div>

<!-- CSS for basic styling -->
<style>
  .carousel {
    position: relative;
    overflow: hidden;
  }
  
  .carousel-items {
    display: flex;
    transition: transform 1s ease-in-out;
  }
  
  .carousel-item {
    min-width: 100%;
    flex-shrink: 0;
  }
</style>

<!-- JavaScript to make the carousel auto-move -->
<script>
  let currentIndex = 0;  // Track the current slide index
  const items = document.querySelectorAll('.carousel-item');  // All the carousel items
  const totalItems = items.length;  // Total number of items

  // Function to move to the next slide
  function goToNextSlide() {
    currentIndex = (currentIndex + 1) % totalItems;  // Loop back to the first slide
    updateCarouselPosition();
  }

  // Function to update the carousel position
  function updateCarouselPosition() {
    const carousel = document.querySelector('.carousel-items');
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;  // Move the carousel
  }

  // Start auto-sliding every 3 seconds (3000ms)
  setInterval(goToNextSlide, 3000);

</script>


<!-- aabout -->
<div class="hero bg-white-200 min-h-screen p-0 m-0">
  <div
      class="hero min-h-screen p-0 m-0"
      style="background-image: url('https://topcreamery-com.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2022/10/17143238/Milk-Tea-Business-2.jpeg');">
      <div class="hero-overlay bg-opacity-60"></div>
  </div>
  <div class="hero-content flex-col lg:flex-row p-0 m-0">
    <img
      src="{{ asset('images/toko.jpg')}}"
      class="w-full max-w-4xl rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-4xl font-bold text-white" style="font-family: 'Playfair Display', serif;">Tea Bliss</h1>
      <p class="py-6 text-white">
        Tea Bliss adalah tempat yang menghadirkan pengalaman tak terlupakan dalam menikmati berbagai pilihan milk tea berkualitas tinggi. Dengan mengutamakan rasa yang kaya dan bahan-bahan terbaik, Tea Bliss berkomitmen untuk memberikan kenyamanan dalam setiap tegukan. Dari varian klasik yang sudah dikenal, hingga inovasi rasa terbaru yang segar dan unik, setiap cangkir yang kami sajikan adalah momen istimewa. Nikmati kesegaran dan kenikmatan dalam setiap seruputannya, dan temukan rasa yang menyatu dengan hati. Tea Bliss, tempat yang pas untuk berbagi kebahagiaan dalam setiap tegukan.
      </p>
    </div>
  </div>
</div>
<div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4e4a44" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,96C384,107,480,149,576,160C672,171,768,149,864,122.7C960,96,1056,64,1152,69.3C1248,75,1344,117,1392,138.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<div class="container mx-auto px-4 py-8">

<!-- team -->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
  <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight sm:text-4xl md:mx-auto" style="color: #A8C080; display: flex; justify-content: center; align-items: center;">
  <span class="relative inline-block" style="color: #A8C080;">Welcome</span>
  to our 
  <span style="display: flex; align-items: center;">
    Team
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people-fill ml-2" viewBox="0 0 16 16">
      <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
    </svg>
  </span>
</h2>

    <p class="text-base text-gray-700 md:text-lg">
      Kami di sini ingin memanjakan para penikmat teh :3
    </p>
  </div>
  <!-- team1 -->
  <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
    <div>
      <div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{ asset('images/goomy.jpeg')}}" alt="Person" />
        <div class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
          <p class="mb-1 text-lg font-bold text-gray-100">Ubed</p>
          <p class="mb-4 text-xs text-gray-100">Product Manager</p>
          <p class="mb-4 text-xs tracking-wide text-gray-400">
            Pelajar yang pengen kaya tanpa ngelakuin hal apapun
          </p>
          <div class="flex items-center justify-center space-x-3">
          <a href="https://www.instagram.com/mudbedz/profilecard/?igsh=dHh4dm10enlobTV2" class="text-white transition-colors duration-300 hover:text-teal-accent-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- team2 -->
    <div>
      <div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{ asset('images/plant.jpeg')}}" alt="Person" />
        <div class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
          <p class="mb-1 text-lg font-bold text-gray-100">Gwenstefani_4eva</p>
          <p class="mb-4 text-xs text-gray-100">Employee</p>
          <p class="mb-4 text-xs tracking-wide text-gray-400">
            I clicked "hide icons" but i can still see me
          </p>
          <div class="flex items-center justify-center space-x-3">
          <a href="https://www.instagram.com/mudbedz/profilecard/?igsh=dHh4dm10enlobTV2" class="text-white transition-colors duration-300 hover:text-teal-accent-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- team3 -->
    <div>
      <div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{ asset('images/plant.jpeg')}}" alt="Person" />
        <div class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
          <p class="mb-1 text-lg font-bold text-gray-100">Larry</p>
          <p class="mb-4 text-xs text-gray-100">Employee.</p>
          <p class="mb-4 text-xs tracking-wide text-gray-400">
            Born to be pokemon trainer, force to be employee
          </p>
          <div class="flex items-center justify-center space-x-3">
          <a href="https://www.instagram.com/mudbedz/profilecard/?igsh=dHh4dm10enlobTV2" class="text-white transition-colors duration-300 hover:text-teal-accent-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- team4 -->
    <div>
      <div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{ asset('images/catt.jpeg')}}" alt="Person" />
        <div class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
          <p class="mb-1 text-lg font-bold text-gray-100">Onika Burger</p>
          <p class="mb-4 text-xs text-gray-100">Marketing</p>
          <p class="mb-4 text-xs tracking-wide text-gray-400">
            'Mama that burn", she was like "Queen never cry💜"
          </p>
          <div class="flex items-center justify-center space-x-3">
            <a href="https://www.instagram.com/mudbedz/profilecard/?igsh=dHh4dm10enlobTV2" class="text-white transition-colors duration-300 hover:text-teal-accent-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>   
  <!-- Paragraf Baru -->
  <p class="mt-4 text-center text-gray-600 md:text-lg">
  Di Tea Bliss, kami percaya bahwa setiap tegukan teh memiliki kekuatan untuk menciptakan momen kebahagiaan dan kedamaian. Motto kami, "Setiap tegukan, menyajikan kegembiraan," menggambarkan komitmen kami untuk menyajikan pengalaman teh yang tidak hanya memanjakan indera, tetapi juga menghubungkan orang-orang dengan kegembiraan. Tujuan kami adalah menyediakan teh berkualitas tinggi dengan berbagai pilihan rasa yang dapat dinikmati oleh semua kalangan. Kami berfokus pada keberlanjutan, bekerja sama dengan petani teh lokal untuk memastikan kualitas dan cita rasa yang terbaik, sekaligus mendukung komunitas dan lingkungan sekitar.
  </p>
</div>
</div>

    <!-- Bagian dengan background hijau pastel dan lebar penuh -->
    <h1 class="text-3xl font-bold text-center p-4" style="color: #A8C080;">ALASAN UTAMA UNTUK DATANG KE TEABLISS</h1>
</div>
<!-- Features Section -->
<div class="features flex flex-wrap justify-center gap-8">
    <!-- Card 1 -->
    <div class="feature w-full sm:w-80 lg:w-96 text-center bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="relative w-full aspect-[9/16]">
            <!-- Gambar dengan rasio 9:16 -->
            <img src="{{ asset('images/alcreami.jpeg') }}" alt="Fun" class="w-full h-full object-cover rounded-lg mb-6">
        </div>
        <h2 class="text-xl font-semibold mb-4" style="color: #A8C080;">FUN🤩</h2>
        <p class="text-gray-700 text-sm leading-relaxed">
            Momen keceriaan kamu adalah semangat kami. Entah itu saat menemukan sesuatu yang baru, meracik, hingga menciptakan minuman segar khusus untukmu.
        </p>
    </div>

    <!-- Card 2 -->
    <div class="feature w-full sm:w-80 lg:w-96 text-center bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="relative w-full aspect-[9/16]">
            <!-- Gambar dengan rasio 9:16 -->
            <img src="{{ asset('images/wai.jpeg') }}" alt="Fresh" class="w-full h-full object-cover rounded-lg mb-6">
        </div>
        <h2 class="text-xl font-semibold mb-4" style="color: #A8C080;">FRESH☕</h2>
        <p class="text-gray-700 text-sm leading-relaxed">
            Kami memproduksi minuman berkualitas tinggi, diseduh dari bahan-bahan paling segar, lengkap dengan rasa yang paling nikmat.
        </p>
    </div>

    <!-- Card 3 -->
    <div class="feature w-full sm:w-80 lg:w-96 text-center bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="relative w-full aspect-[9/16]">
            <!-- Gambar dengan rasio 9:16 -->
            <img src="{{ asset('images/happines.jpeg') }}" alt="Happiness" class="w-full h-full object-cover rounded-lg mb-6">
        </div>
        <h2 class="text-xl font-semibold mb-4" style="color: #A8C080;">CHEAP🍀</h2>
        <p class="text-gray-700 text-sm leading-relaxed">
            Kami menyediakan beragam menu dengan harga yang aman dikantong. Kami juga menyediakan diskon disetiap minggunya.
        </p>
    </div>
</div>
@endsection