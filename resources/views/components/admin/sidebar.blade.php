<div id="sidebar" class="w-64 bg-white shadow-lg h-screen p-5 fixed lg:static top-0 left-0 
                           transform -translate-x-full lg:translate-x-0 transition duration-300">
    <h2 class="text-2xl font-bold mb-6">Menu</h2>

    <nav class="space-y-2">
    <button onclick="window.location.href='{{ route('admin.index') }}'" class="w-full text-left p-3 rounded hover:bg-gray-200">🏠 Home</button>
    <button onclick="window.location.href='{{ route('admin.users') }}'"class="w-full text-left p-3 rounded hover:bg-gray-200">👥 Users</button>
    <button onclick="window.location.href='{{ route('products.index') }}'" class="w-full text-left p-3 rounded hover:bg-gray-200">📦 Products</button>
    <button onclick="window.location.href='{{ route('admin.orders') }}'" class="w-full text-left p-3 rounded hover:bg-gray-200">🧾 Orders</button>
    <button onclick="window.location.href='{{ route('admin.profile') }}'" class="w-full text-left p-3 rounded hover:bg-gray-200">👤 Profile</button>
    <button onclick="window.location.href='{{ route('admin.settings') }}'" class="w-full text-left p-3 rounded hover:bg-gray-200">⚙️ Settings</button>
    <a href="#">
        <form onsubmit="return confirm('Are you sure to logout?')" method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" id="logoutBtn">🚪Logout</button>
        </form>
    </a>
    
    </nav>
</div>