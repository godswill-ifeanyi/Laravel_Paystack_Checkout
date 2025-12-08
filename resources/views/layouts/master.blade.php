<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Dashboard</title>

  <!-- Alertify CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

  @if (session('success'))
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      alertify.set('notifier','position', 'top-right');
      alertify.success('{{ session('success') }}');
    });
    </script>

    @elseif (session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        alertify.set('notifier','position', 'top-right');
        alertify.error('{{ session('error') }}');
        });
    </script>

    @endif

  <!-- MOBILE TOP NAV -->
  <div class="lg:hidden flex items-center justify-between bg-white p-4 shadow">
    <h1 class="text-xl font-bold">Dashboard</h1>
    <button onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')" 
            class="text-gray-700 text-2xl">&#9776;</button>
  </div>

  <div class="flex">

    <!-- SIDEBAR -->
    <x-admin.sidebar />

    <!-- MAIN CONTENT -->
    <div class="flex-1 p-6 lg:ml-64">
        @yield('content')
    </div>
  </div>

  {{-- <script>
    function showPage(page) {
      document.querySelectorAll('.page').forEach(p => p.classList.add('hidden'));
      document.getElementById(page).classList.remove('hidden');
    }
  </script> --}}
  <!-- Alertify JavaScript -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

</body>
</html>
