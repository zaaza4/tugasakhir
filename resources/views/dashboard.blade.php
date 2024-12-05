<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Main Card -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-3xl transform hover:scale-105 transition-all duration-300 ease-in-out mb-6">
                <div class="p-6 text-gray-900 text-lg">
                    <h3 class="text-2xl font-semibold">{{ __("Welcome, User!") }}</h3>
                    <p class="mt-2 text-gray-600">{{ __("You're logged in and ready to go.") }}</p>
                </div>
            </div>

            <!-- Form Card: Add Product -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <h3 class="text-2xl font-semibold mb-4">{{ __("Add New Product") }}</h3>
                
                <form action="{{ route('produk') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-semibold text-gray-700">Product Name</label>
                        <input type="text" id="name" name="name" class="mt-2 p-2 w-full border rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-semibold text-gray-700">Description</label>
                        <textarea id="description" name="description" class="mt-2 p-2 w-full border rounded-md" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block text-sm font-semibold text-gray-700">Price</label>
                        <input type="number" id="price" name="price" class="mt-2 p-2 w-full border rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-sm font-semibold text-gray-700">Product Image</label>
                        <input type="file" id="image" name="image" class="mt-2 p-2 w-full border rounded-md" required>
                    </div>

                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Add Product</button>
                </form>
            </div>

            <!-- Info Card -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18M3 18h18" />
                    </svg>
                    <div>
                        <h4 class="text-xl font-semibold">{{ __("Important Notifications") }}</h4>
                        <p class="text-gray-600 mt-2">{{ __("You have 3 new messages and 2 tasks pending.") }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
