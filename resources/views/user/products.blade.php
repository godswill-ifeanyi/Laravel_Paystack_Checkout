@extends('layouts.app')

@section('content')

    <section id="products" class="page">
        <h1 class="text-3xl font-bold text-gray-700 mb-6">Available Products</h1>

        <div class="grid grid-cols-3 gap-6">

            @forelse ($products as $product)
            <form method="POST" action="{{ route('products.pay') }}">
                @csrf

                <input type="hidden" name="price" value="{{ $product->price }}">
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <div class="bg-white p-5 rounded-xl shadow">
                    <img src="{{ asset('images/'.$product->image) }}" class="rounded-lg mb-4">
                    <h3 class="text-xl font-semibold text-gray-700">{{ $product->name }}</h3>
                    <p class="text-gray-600 text-sm my-2">{{ $product->description }}</p>
                    <p class="text-lg font-bold mb-3">N{{ $product->price }}</p>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Buy</button>
                </div>
            </form>
            @empty
                <div class="bg-white p-5 rounded-xl shadow">
                    <p>No available products</p>
                </div>
            @endforelse

        </div>
    </section>

@endsection