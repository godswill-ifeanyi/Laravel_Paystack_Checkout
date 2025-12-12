<aside class="w-64 bg-white shadow-lg fixed inset-y-0 left-0 p-6">
    <h2 class="text-2xl font-bold mb-8 text-gray-700">Dashboard</h2>

    <nav class="space-y-4">
      <button onclick="window.location.href='{{ route('user.index') }}'" class="w-full text-left px-4 py-2 rounded-lg {{ request()->is('user/index') ? 'bg-blue-600 text-white' : '' }}">Home</button>
      <button onclick="window.location.href='{{ route('user.products') }}'" class="w-full text-left px-4 py-2 rounded-lg hover:bg-gray-200 {{ request()->is('user/products') ? 'bg-blue-600 text-white' : '' }}">Products</button>
      <button onclick="window.location.href='{{ route('user.orders') }}'" class="w-full text-left px-4 py-2 rounded-lg hover:bg-gray-200 {{ request()->is('user/orders') ? 'bg-blue-600 text-white' : '' }}">Orders</button>
      <button onclick="window.location.href='{{ route('profile.index') }}'" class="w-full text-left px-4 py-2 rounded-lg hover:bg-gray-200 {{ request()->is('user/profile') ? 'bg-blue-600 text-white' : '' }}">Profile</button>

      <hr class="my-4">

      <form onsubmit="return confirm('Are you sure to logout?')" method="POST" action="{{ route('logout') }}">
      @csrf

      <button class="w-full text-left px-4 py-2 rounded-lg bg-red-500 text-white" type="submit" id="logoutBtn">Logout</button>
      </form>

    </nav>
  </aside>