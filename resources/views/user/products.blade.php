@extends('layouts.app')

@section('content')

    <section id="products" class="page">
        <h1 class="text-3xl font-bold text-gray-700 mb-6">Available Products</h1>

        <div class="grid grid-cols-3 gap-6">

            <!-- Product 1 -->
            <div class="bg-white p-5 rounded-xl shadow">
            <img src="https://via.placeholder.com/300x200" class="rounded-lg mb-4">
            <h3 class="text-xl font-semibold text-gray-700">Wireless Headphones</h3>
            <p class="text-gray-600 text-sm my-2">High-quality sound with noise cancellation.</p>
            <p class="text-lg font-bold mb-3">$45</p>
            <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Buy</button>
            </div>

            <!-- Product 2 -->
            <div class="bg-white p-5 rounded-xl shadow">
            <img src="https://via.placeholder.com/300x200" class="rounded-lg mb-4">
            <h3 class="text-xl font-semibold text-gray-700">Smart Watch</h3>
            <p class="text-gray-600 text-sm my-2">Tracks your health and notifications.</p>
            <p class="text-lg font-bold mb-3">$80</p>
            <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Buy</button>
            </div>

            <!-- Product 3 -->
            <div class="bg-white p-5 rounded-xl shadow">
            <img src="https://via.placeholder.com/300x200" class="rounded-lg mb-4">
            <h3 class="text-xl font-semibold text-gray-700">Bluetooth Speaker</h3>
            <p class="text-gray-600 text-sm my-2">Crystal clear sound in a compact size.</p>
            <p class="text-lg font-bold mb-3">$32</p>
            <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Buy</button>
            </div>

        </div>
    </section>

@endsection