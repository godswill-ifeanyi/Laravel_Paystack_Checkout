@extends('layouts.app')

@section('content')
    <section id="profile" class="page">
        <h1 class="text-3xl font-bold text-gray-700 mb-4">Your Profile</h1>

        <div class="bg-white p-8 rounded-xl shadow max-w-lg">
            <div class="flex items-center gap-4 mb-6">
            <img src="https://via.placeholder.com/80" class="rounded-full">
            <div>
                <h3 class="text-xl font-semibold text-gray-700">John Doe</h3>
                <p class="text-gray-500 text-sm">Premium User</p>
            </div>
            </div>

            <p class="text-gray-600 mb-2"><strong>Email:</strong> johndoe@example.com</p>
            <p class="text-gray-600 mb-2"><strong>Phone:</strong> +234 800 000 0000</p>
            <p class="text-gray-600 mb-2"><strong>Member Since:</strong> Jan 2023</p>

            <button class="mt-6 w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
            Edit Profile
            </button>
        </div>
    </section>
@endsection