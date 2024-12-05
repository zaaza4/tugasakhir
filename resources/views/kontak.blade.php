@extends('layout')

@section('container')
<!-- info kontak rorr -->
<section class="dark:bg-slate-800" id="contact">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
        <div class="mb-4">
            <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                <h2 class="font-heading mb-4 font-bold tracking-tight text-gray-900 text-3xl sm:text-5xl">
                    Contact Us
                </h2>
            </div>
        </div>

        <div class="flex items-stretch justify-center">
            <div class="grid md:grid-cols-2">
                <div class="h-full pr-6">
                    <p class="mt-3 mb-12 text-lg text-gray-600">
                        Hubungi kami jika anda mengalami masalah dan berikan kami keluhan tentang produk kami, kami akan dengan senang hati melayani anda dan memberikan solusi yang tepat.
                    </p>
                    <ul class="mb-6 md:mb-0">
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900">Our Address</h3>
                                <p class="text-gray-600">Jln. Coldbourne, Kota Ardotalia.</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900">Contact</h3>
                                <p class="text-gray-600">WA: +62 81515845790</p>
                                <p class="text-gray-600">Email: TeaBliss@gmail.com</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M12 7v5l3 3"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900">Our Social Media</h3>
                                <p class="text-gray-600">Instagram: TeaBliss</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Konten bagian kontak -->
                <div class="hero min-h-screen p-0 m-0 relative rounded-lg overflow-hidden" style="background-image: url('{{ asset('images/webb.jpeg') }}'); background-size: cover; background-position: center;">
                    <div class="hero-overlay bg-black bg-opacity-60"></div>

                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-white bg-opacity-90 p-8 rounded-lg shadow-lg max-w-lg w-full">
                            <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Hubungi Kami</h2>

                            <form>
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Nama</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
                                        placeholder="Masukkan nama Anda"
                                        required
                                    >
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
                                        placeholder="Masukkan email Anda"
                                        required
                                    >
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="block text-lg font-medium text-gray-700 mb-2">Pesan</label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="4"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
                                        placeholder="Tulis pesan Anda di sini"
                                        required
                                    ></textarea>
                                </div>

                                <div class="text-center">
                                    <button
                                        type="submit"
                                        class="px-6 py-2 bg-teal-500 text-white font-medium rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-700">
                                        Kirim Pesan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
