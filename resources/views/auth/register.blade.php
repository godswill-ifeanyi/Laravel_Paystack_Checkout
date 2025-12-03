<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Register</title>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-sm bg-white p-8 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Create Account</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

      <!-- Name -->
      <div class="mb-4">
        <label class="block text-gray-600 mb-1">Full Name</label>
        <input type="text" name="name" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your name">
        @error('name') <small style="color: red">{{$message}}</small> @enderror
      </div>

      <!-- Email -->
      <div class="mb-4">
        <label class="block text-gray-600 mb-1">Email</label>
        <input type="email" name="email" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter email">
        @error('email') <small style="color: red">{{$message}}</small> @enderror
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label class="block text-gray-600 mb-1">Password</label>
        <input type="password" name="password" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="********">
        @error('password') <small style="color: red">{{$message}}</small> @enderror
      </div>

      <!-- Confirm Password -->
      <div class="mb-6">
        <label class="block text-gray-600 mb-1">Confirm Password</label>
        <input type="password" name="password_confirmation" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="********">
      </div>

      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition">
        Register
      </button>

      <p class="text-center text-sm mt-4 text-gray-600">
        Already have an account?
        <a href="{{ route('login-page') }}" class="text-blue-600 hover:underline">Login</a>
      </p>
    </form>
  </div>
</body>
</html>
