@extends('layouts.app')

@section('content')
    <section id="home" class="page">
      <h1 class="text-3xl font-bold text-gray-700 mb-4">Welcome Back!</h1>
      <p class="text-gray-600 mb-4">
        This is a dummy dashboard home page. You can place your quick stats, recent activities, or analytics here.
      </p>

      <div class="grid grid-cols-3 gap-6 mt-6">
        <div class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold text-gray-700">Today's Visits</h3>
          <p class="text-4xl font-bold mt-3">112</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold text-gray-700">Orders</h3>
          <p class="text-4xl font-bold mt-3">27</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold text-gray-700">Messages</h3>
          <p class="text-4xl font-bold mt-3">5</p>
        </div>
      </div>
    </section>
@endsection