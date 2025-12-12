@extends('layouts.app')

@section('content')

<section id="products" class="page">
    <h1 class="text-3xl font-bold text-gray-700 mb-6">All  Orders</h1>

    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full hidden md:table">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left text-gray-600">Order Reference</th>
                    <th class="p-3 text-left text-gray-600">User</th>
                    <th class="p-3 text-left text-gray-600">Product</th>
                    <th class="p-3 text-left text-gray-600">Amount</th>
                    <th class="p-3 text-left text-gray-600">Status</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($orders as $order)
                    <tr class="border-b">
                        <td class="p-3">{{ $order->reference }}</td>
                        <td class="p-3">{{ $order->user->email }}</td>
                        <td class="p-3">{{ $order->product->name }}</td>
                        <td class="p-3">{{ $order->price }}</td>
                        <td class="p-3">
                            <span class="px-3 py-1 text-green-600 {{ $order->status === 'success' ? 'bg-green-100' : 'bg-red-100'}} rounded">{{ $order->status === 'success' ? 'success' : $order->status}}</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No available order</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- MOBILE CARDS -->
        <div class="md:hidden divide-y">
            
            <!-- Order Card -->
            <div class="p-4">
                <p class="text-gray-500 text-sm">Order ID</p>
                <p class="font-semibold mb-2">#1001</p>

                <p class="text-gray-500 text-sm">Product</p>
                <p class="font-semibold mb-2">Wireless Headphones</p>

                <p class="text-gray-500 text-sm">Amount</p>
                <p class="font-semibold mb-2">$45</p>

                <p class="text-gray-500 text-sm">Status</p>
                <span class="px-3 py-1 bg-green-100 text-green-600 rounded text-sm">Completed</span>
            </div>

            <!-- Order Card -->
            <div class="p-4">
                <p class="text-gray-500 text-sm">Order ID</p>
                <p class="font-semibold mb-2">#1002</p>

                <p class="text-gray-500 text-sm">Product</p>
                <p class="font-semibold mb-2">Smart Watch</p>

                <p class="text-gray-500 text-sm">Amount</p>
                <p class="font-semibold mb-2">$80</p>

                <p class="text-gray-500 text-sm">Status</p>
                <span class="px-3 py-1 bg-yellow-100 text-yellow-600 rounded text-sm">Pending</span>
            </div>

            <!-- Order Card -->
            <div class="p-4">
                <p class="text-gray-500 text-sm">Order ID</p>
                <p class="font-semibold mb-2">#1003</p>

                <p class="text-gray-500 text-sm">Product</p>
                <p class="font-semibold mb-2">Bluetooth Speaker</p>

                <p class="text-gray-500 text-sm">Amount</p>
                <p class="font-semibold mb-2">$32</p>

                <p class="text-gray-500 text-sm">Status</p>
                <span class="px-3 py-1 bg-red-100 text-red-600 rounded text-sm">Cancelled</span>
            </div>

        </div>
    </div>

</section>

@endsection