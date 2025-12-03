<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="w-full max-w-sm bg-white p-8 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

      <!-- Email -->
      <div class="mb-4">
        <label class="block text-gray-600 mb-1">Email</label>
        <input type="email" name="email" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter email">
        @error('email') <small style="color: red">{{$message}}</small> @enderror
      </div>

      <!-- Password -->
      <div class="mb-6">
        <label class="block text-gray-600 mb-1">Password</label>
        <input type="password" name="password" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="********">
        @error('password') <small style="color: red">{{$message}}</small> @enderror
      </div>

      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition">
        Login
      </button>

      <p class="text-center text-sm mt-4 text-gray-600">
        Don’t have an account?
        <a href="{{ route('register-page') }}" class="text-blue-600 hover:underline">Register</a>
      </p>
    </form>
  </div>
</body>
</html>
