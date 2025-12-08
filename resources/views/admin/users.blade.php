@extends('layouts.master')

@section('content')
    <div id="users" class="page">
        <h1 class="text-2xl font-bold mb-4">Users</h1>

        <div class="overflow-x-auto bg-white p-4 rounded shadow">
          <table class="table-auto w-full">
            <thead class="bg-gray-200">
              <tr>
                <th class="p-3">#</th>
                <th class="p-3">Name</th>
                <th class="p-3">Email</th>
                <th class="p-3">Role</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-t">
                <td class="p-3">1</td>
                <td class="p-3">John Doe</td>
                <td class="p-3">john@example.com</td>
                <td class="p-3">Admin</td>
              </tr>
              <tr class="border-t">
                <td class="p-3">2</td>
                <td class="p-3">Mary Jane</td>
                <td class="p-3">mary@example.com</td>
                <td class="p-3">User</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
@endsection