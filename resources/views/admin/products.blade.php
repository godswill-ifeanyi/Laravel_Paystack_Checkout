@extends('layouts.master')

@section('content')
    <div id="products" class="page">
        <h1 class="text-2xl font-bold mb-4">Products</h1>

        <button onclick="window.location.href='{{ route('products.create') }}'" class="bg-blue-600 text-white px-4 py-2 rounded mb-4">Add Product</button>

        <div class="overflow-x-auto bg-white p-4 rounded shadow">
          <table class="w-full table-auto">
            <thead class="bg-gray-200">
              <tr>
                <th class="p-3">Image</th>
                <th class="p-3">Name</th>
                <th class="p-3">Price</th>
                <th class="p-3">Description</th>
                <th class="p-3">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($products as $product)
                <tr class="border-t">
                  <td class="p-3">
                    <img src="{{ asset('images/'.$product->image) }}" alt="">
                  </td>
                  <td class="p-3">{{ $product->name }}</td>
                  <td class="p-3">N{{ $product->price }}</td>
                  <td class="p-3">{{ $product->description }}</td>
                  <td class="p-3 space-x-2">
                    <button onclick="window.location.href='{{ route('products.edit', $product->id) }}'" class="px-3 py-1 bg-green-500 text-white rounded">Edit</button>

                    <form method="POST" action="{{ route('products.destroy', $product->id) }}" onsubmit="return confirm('Are you sure to delete this products?')">
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5">No product available.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
@endsection