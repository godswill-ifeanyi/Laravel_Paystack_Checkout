<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>User Dashboard</title>
</head>

<body class="bg-gray-100 min-h-screen flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-white shadow-lg fixed inset-y-0 left-0 p-6">
    <h2 class="text-2xl font-bold mb-8 text-gray-700">Dashboard</h2>

    <nav class="space-y-4">
      <button onclick="showPage('home')" class="w-full text-left px-4 py-2 rounded-lg bg-blue-600 text-white">Home</button>
      <button onclick="showPage('products')" class="w-full text-left px-4 py-2 rounded-lg hover:bg-gray-200">Products</button>
      <button onclick="showPage('profile')" class="w-full text-left px-4 py-2 rounded-lg hover:bg-gray-200">Profile</button>

      <hr class="my-4">

      <button class="w-full text-left px-4 py-2 rounded-lg bg-red-500 text-white">Logout</button>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="ml-64 p-8 w-full">

    <!-- HOME PAGE -->
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

    <!-- PRODUCTS PAGE -->
    <section id="products" class="page hidden">
      <h1 class="text-3xl font-bold text-gray-700 mb-6">Available Products</h1>

      <div class="grid grid-cols-3 gap-6">

        <!-- Product 1 -->
        <div class="bg-white p-5 rounded-xl shadow">
          <img src="https://via.placeholder.com/300x200" class="rounded-lg mb-4">
          <h3 class="text-xl font-semibold text-gray-700">Wireless Headphones</h3>
          <p class="text-gray-600 text-sm my-2">High-quality sound with noise cancellation.</p>
          <p class="text-lg font-bold mb-3">$45</p>
          <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Buy</button>
        </div>

        <!-- Product 2 -->
        <div class="bg-white p-5 rounded-xl shadow">
          <img src="https://via.placeholder.com/300x200" class="rounded-lg mb-4">
          <h3 class="text-xl font-semibold text-gray-700">Smart Watch</h3>
          <p class="text-gray-600 text-sm my-2">Tracks your health and notifications.</p>
          <p class="text-lg font-bold mb-3">$80</p>
          <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Buy</button>
        </div>

        <!-- Product 3 -->
        <div class="bg-white p-5 rounded-xl shadow">
          <img src="https://via.placeholder.com/300x200" class="rounded-lg mb-4">
          <h3 class="text-xl font-semibold text-gray-700">Bluetooth Speaker</h3>
          <p class="text-gray-600 text-sm my-2">Crystal clear sound in a compact size.</p>
          <p class="text-lg font-bold mb-3">$32</p>
          <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Buy</button>
        </div>

      </div>
    </section>

    <!-- PROFILE PAGE -->
    <section id="profile" class="page hidden">
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

  </main>

  <!-- Simple Script to Show Pages (No Logic, Just UI Switching) -->
  <script>
    function showPage(page) {
      document.querySelectorAll('.page').forEach(p => p.classList.add('hidden'));
      document.getElementById(page).classList.remove('hidden');
    }
  </script>

</body>
</html>
