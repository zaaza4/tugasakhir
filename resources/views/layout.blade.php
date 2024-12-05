<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="bg-rose-900">
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="relative flex grid items-center grid-cols-2 lg:grid-cols-3">
            <!-- Navigation Menu for Desktop -->
            <ul class="flex items-center hidden space-x-8 lg:flex">
                <li><a href="{{ route('about') }}" aria-label="Tentang kami" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">About Us</a></li>
                <li><a href="{{ route('produk') }}" aria-label="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">We Serve</a></li>
                <li><a href="{{ route('kontak') }}" aria-label="Hbungi kami" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Contact Us</a></li>
            </ul>

            <!-- Logo -->
            <a href="/" aria-label="Company" class="inline-flex items-center lg:mx-auto">
                <svg class="w-8 text-teal-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                    <rect x="3" y="1" width="7" height="12"></rect>
                    <rect x="3" y="17" width="7" height="6"></rect>
                    <rect x="14" y="1" width="7" height="6"></rect>
                    <rect x="14" y="11" width="7" height="12"></rect>
                </svg>
                <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase">Tea Bliss</span>
            </a>

            <!-- Navigation for Desktop -->
            <ul class="flex items-center space-x-8 ml-auto lg:flex">
                <li>
                    <a href="{{ route('home') }}" aria-label="Home" class="flex items-center font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">
                        <svg class="w-6 h-6 text-gray-100 hover:text-teal-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                            <path d="M3 9L12 2L21 9V21H3V9Z"></path>
                            <path d="M9 22V12H15V22"></path>
                        </svg>
                    </a>
                </li>

                <!-- Order Now Button -->
                <li>
                    <a href="{{ route('orders.create') }}" aria-label="Order Now" class="inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white bg-teal-accent-400 rounded-lg shadow-md hover:bg-teal-accent-600 transition duration-200 focus:outline-none focus:shadow-outline">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4"/>
                        </svg>

                    </a>
                </li>

                <!-- View Orders Button -->
                <li>
                    <a href="{{ route('orders.index') }}" aria-label="Lihat Pesanan" class="inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white bg-teal-accent-400 rounded-lg shadow-md hover:bg-teal-accent-600 transition duration-200 focus:outline-none focus:shadow-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        Your Order
                    </a>
                </li>

                <!-- Login Button -->
                <li>
                    <a href="/login" aria-label="Login" title="Login" class="inline-flex items-center justify-center h-8 px-4 font-medium tracking-wide text-white bg-teal-accent-400 rounded-lg shadow-md hover:bg-teal-accent-600 transition duration-200 focus:outline-none focus:shadow-outline">
                        Login
                    </a>
                </li>
            </ul>

            <!-- Mobile Menu -->
            <div class="ml-auto lg:hidden">
                <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                        <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                        <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Content -->
@yield('container')

<!-- Footer -->
<footer class="footer bg-[#78716C] text-[#E5E5E5] items-center p-4">
    <aside class="grid-flow-col items-center">
        <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current">
            <path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.007-.366 2.09-1.468 2.425l-1.895.617-.618 1.896c-.335 1.102-1.418 1.798-2.425 1.467l-2.514-.841-.81 2.433c-.33 1.007-1.412 1.798-2.419 1.467l-1.896-.618-.618 1.895c-.335 1.102-1.418 1.798-2.425 1.467l-2.433-.81-.81 2.514c-.33 1.007-1.412 1.798-2.419 1.467l-1.896-.618-.618 1.895c-.335 1.102-1.418 1.798-2.425 1.467l-2.514-.841.841-2.515c.33-1.007-.366-2.09-1.468-2.425l-1.895-.617-.618-1.896c-.335-1.102-1.418-1.798-2.425-1.467l-2.432.81-.81-2.433c-.33-1.007-1.412-1.798-2.419-1.467l-1.896.618-.618-1.895c-.335-1.102-1.418-1.798-2.425-1.467l-2.433.81-.81-2.514c-.33-1.007-1.412-1.798-2.419-1.467l-1.896.618-.618-1.896c-.335-1.102-1.418-1.798-2.425-1.467l-2.432-.81 1.207-3.621c.02-.063.039-.127.061-.19l-.801-.809c-.043.041-.087.079-.131.121l-.482-.482 2.576-7.798.839 2.507c.01-.077.03-.153.053-.23l-.639-2.195c-.331 1.239-1.075 2.088-.638 2.639.137.308-.429-.745-.313 0 0 2-13.184 25.292 14.19-.235-.859-.76z"></path>
        </svg>        
    </aside>
</footer>

</body>
</html>
