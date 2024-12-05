@extends('layout')
@section('container')
<div class="bg-white-900">
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-5 row-gap-10 lg:grid-cols-2">
          <div class="flex flex-col justify-center">
            <div class="max-w-xl mb-6">
              <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                Tea Bliss,<br class="hidden md:block" />
                setiap tegukan menyediakan kebahagiaan
              </h2>
              <p class="text-base text-gray-700 md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
              </p>
            </div>
            <p class="mb-4 text-sm font-bold tracking-widest uppercase">Menyediakan</p>
            <div class="grid space-y-3 sm:gap-2 sm:grid-cols-2 sm:space-y-0">
              <ul class="space-y-3">
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Milk Tea
                </li>
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Teh Boba
                </li>
                <li class="flex">
                  <span class="mr-1">
                    <svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                      <polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg>
                  </span>
                  Milkshake
                </li>
              </ul>
            </div>
          </div>
          <div>
            <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="https://mir-s3-cdn-cf.behance.net/projects/404/9cd2dd186358995.Y3JvcCwxODAwLDE0MDcsMCwxOTY.jpg" alt="" />
          </div>
        </div>
      </div>
      <!-- home promo -->
       <div class="flex flex-col items-center justify-center min-h-screen bg-[#FECACA] space-y-8">
  <!-- Header Section -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L48,202.7C96,181,192,139,288,128C384,117,480,139,576,165.3C672,192,768,224,864,208C960,192,1056,128,1152,112C1248,96,1344,128,1392,144L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <div class="px-4 py-8 sm:max-w-xl md:max-w-full lg:max-w-screen-md md:px-24 lg:px-8">
    <h2 class="text-3xl font-bold leading-none tracking-tight text-rose-900 sm:text-4xl text-center animate-bounce">
      Promo Hari ini, Jangan sampai dilewatkan :D
    </h2>
  </div>
      <div class="flex flex-wrap justify-center items-start space-x-4 min-h-screen bg-[#FECACA] p-8">
  <!-- Card 1 -->
  <div class="card bg-base-100 w-96 shadow-xl">
    <figure>
      <img
        src="{{ asset('images/Honey Chamomile Tea Latte.jpg')}}"
        alt="Shoes" />
    </figure>
    <div class="card-body">
      <h2 class="card-title">
        Chamomile TeaLatte
        <div class="badge badge-secondary">Diskon 25%</div>
      </h2>
      <p>kenyamanan aroma bunga chamomile</p>
      <div class="card-actions justify-end">
        <div class="badge badge-outline">Sweet</div>
        <div class="badge badge-outline">creamy</div>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card bg-base-100 w-96 shadow-xl">
    <figure>
      <img
        src="{{ asset ('images/Fresh Strawberry Milkshakes.jpg') }}"
        alt="Shoes" />
    </figure>
    <div class="card-body">
      <h2 class="card-title">
        strawberry Milkshake
        <div class="badge badge-secondary">Diskon 25%</div>
      </h2>
      <p>Dengan kesegaran buah!</p>
      <div class="card-actions justify-end">
        <div class="badge badge-outline">Fresh</div>
        <div class="badge badge-outline">Sweet</div>
      </div>
    </div>
  </div>

  </div>
</div>


  @endsection