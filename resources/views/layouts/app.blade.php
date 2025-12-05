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
  <x-sidebar />

  <!-- Main Content -->
  <main class="ml-64 p-8 w-full">
    @yield('content')
  </main>

  <!-- Simple Script to Show Pages (No Logic, Just UI Switching) -->
  {{-- <script>
    function showPage(page) {
      document.querySelectorAll('.page').forEach(p => p.classList.add('hidden'));
      document.getElementById(page).classList.remove('hidden');
    }
  </script> --}}

</body>
</html>
