<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

  <!-- MOBILE TOP NAV -->
  <div class="lg:hidden flex items-center justify-between bg-white p-4 shadow">
    <h1 class="text-xl font-bold">Dashboard</h1>
    <button onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')" 
            class="text-gray-700 text-2xl">&#9776;</button>
  </div>

  <div class="flex">

    <!-- SIDEBAR -->
    <div id="sidebar" class="w-64 bg-white shadow-lg h-screen p-5 fixed lg:static top-0 left-0 
                           transform -translate-x-full lg:translate-x-0 transition duration-300">
      <h2 class="text-2xl font-bold mb-6">Menu</h2>

      <nav class="space-y-2">
        <button onclick="showPage('home')" class="w-full text-left p-3 rounded hover:bg-gray-200">🏠 Home</button>
        <button onclick="showPage('users')" class="w-full text-left p-3 rounded hover:bg-gray-200">👥 Users</button>
        <button onclick="showPage('products')" class="w-full text-left p-3 rounded hover:bg-gray-200">📦 Products</button>
        <button onclick="showPage('orders')" class="w-full text-left p-3 rounded hover:bg-gray-200">🧾 Orders</button>
        <button onclick="showPage('profile')" class="w-full text-left p-3 rounded hover:bg-gray-200">👤 Profile</button>
        <button onclick="showPage('settings')" class="w-full text-left p-3 rounded hover:bg-gray-200">⚙️ Settings</button>
        <a href="#">
            <form onsubmit="return confirm('Are you sure to logout?')" method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" id="logoutBtn">🚪Logout</button>
            </form>
        </a>
        
      </nav>
    </div>

    <!-- MAIN CONTENT -->
    <div class="flex-1 p-6 lg:ml-64">

      <!-- HOME -->
      <div id="home" class="page">
        <h1 class="text-2xl font-bold mb-4">Home</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="bg-white p-6 rounded shadow">Card 1</div>
          <div class="bg-white p-6 rounded shadow">Card 2</div>
          <div class="bg-white p-6 rounded shadow">Card 3</div>
        </div>
      </div>

      <!-- USERS -->
      <div id="users" class="page hidden">
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

      <!-- PRODUCTS -->
      <div id="products" class="page hidden">
        <h1 class="text-2xl font-bold mb-4">Products</h1>

        <button class="bg-blue-600 text-white px-4 py-2 rounded mb-4">Add Product</button>

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

      <!-- ORDERS -->
      <div id="orders" class="page hidden">
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

      <!-- PROFILE -->
      <div id="profile" class="page hidden">
        <h1 class="text-2xl font-bold mb-4">Profile</h1>

        <div class="bg-white p-6 rounded shadow">
          <p class="text-gray-600">Name: John Doe</p>
          <p class="text-gray-600 mt-2">Email: john@example.com</p>
          <p class="text-gray-600 mt-2">Role: Admin</p>
        </div>
      </div>

      <!-- SETTINGS -->
      <div id="settings" class="page hidden">
        <h1 class="text-2xl font-bold mb-4">Settings</h1>

        <div class="bg-white p-6 rounded shadow">
          <p class="text-gray-600">Settings content goes here...</p>
        </div>
      </div>

    </div>
  </div>

  <script>
    function showPage(page) {
      document.querySelectorAll('.page').forEach(p => p.classList.add('hidden'));
      document.getElementById(page).classList.remove('hidden');
    }
  </script>

</body>
</html>
