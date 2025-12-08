@extends('layouts.master')

@section('content')
    <div id="products" class="page">
        <h1 class="text-2xl font-bold mb-4">Products</h1>

        <button onclick="window.location.href='{{ route('products.create') }}'" class="bg-blue-600 text-white px-4 py-2 rounded mb-4">Add Product</button>

        <div class="overflow-x-auto bg-white p-4 rounded shadow">
          <table class="w-full table-auto">
            <thead class="bg-gray-200">
              <tr>
                <th class="p-3">#</th>
                <th class="p-3">Name</th>
                <th class="p-3">Price</th>
                <th class="p-3">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-t">
                <td class="p-3">1</td>
                <td class="p-3">Product A</td>
                <td class="p-3">$99</td>
                <td class="p-3 space-x-2">
                  <button class="px-3 py-1 bg-green-500 text-white rounded">Edit</button>
                  <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                </td>
              </tr>
              <tr class="border-t">
                <td class="p-3">2</td>
                <td class="p-3">Product B</td>
                <td class="p-3">$150</td>
                <td class="p-3 space-x-2">
                  <button class="px-3 py-1 bg-green-500 text-white rounded">Edit</button>
                  <button class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
@endsection