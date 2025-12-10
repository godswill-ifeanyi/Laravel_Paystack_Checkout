@extends('layouts.master')

@section('content')
    <div id="products" class="page">
        <h1 class="text-2xl font-bold mb-4">Products</h1>

        <button onclick="window.location.href='{{ route('products.index') }}'" class="bg-blue-600 text-white px-4 py-2 rounded mb-4">Back</button>

        <div class="overflow-x-auto bg-white p-4 rounded shadow">
          <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

        <!-- Name -->
        <div class="mb-4">
            <label class="block text-gray-600 mb-1">Name</label>
            <input type="text" value="{{ $product->name }}" name="name" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter product name">
            @error('name') <small style="color: red">{{$message}}</small> @enderror
        </div>

            <!-- Price -->
            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Price</label>
                <input type="number" value="{{ $product->price }}" name="price" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter product price">
                @error('price') <small style="color: red">{{$message}}</small> @enderror
            </div>

            <!-- Desc -->
            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Description</label>
                <textarea name="description" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter product description">{{ $product->description }}</textarea>
                @error('description') <small style="color: red">{{$message}}</small> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 mb-1">Current Image</label>
                <img class="w-48" src="{{ asset('images/'.$product->image) }}" alt="">
                <br>

                <label class="block text-gray-600 mb-1">New Image</label>
                <input type="file" name="image" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('image') <small style="color: red">{{$message}}</small> @enderror
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition">
                Update
            </button>

        </form>
        </div>
      </div>
@endsection