@extends('layouts.master')

@section('content')
    <div id="orders" class="page">
        <h1 class="text-2xl font-bold mb-4">Orders</h1>

        <div class="overflow-x-auto bg-white p-4 rounded shadow">
          <table class="w-full table-auto">
            <thead class="bg-gray-200">
              <tr>
                <th class="p-3">Order #</th>
                <th class="p-3">Customer</th>
                <th class="p-3">Total</th>
                <th class="p-3">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-t">
                <td class="p-3">1001</td>
                <td class="p-3">John Doe</td>
                <td class="p-3">$199</td>
                <td class="p-3">Processing</td>
              </tr>
              <tr class="border-t">
                <td class="p-3">1002</td>
                <td class="p-3">Mary Jane</td>
                <td class="p-3">$250</td>
                <td class="p-3">Completed</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
@endsection