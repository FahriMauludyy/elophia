<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <title>Admin Dashboard</title>
  @vite('resources/css/app.css') {{-- Pastikan Tailwind sudah terpasang --}}
  <style>
    .font-dmsans {
        font-family: 'DM Sans', sans-serif;
    }
    .font-logo{
        font-family: 'Noto Sans JP', sans-serif;
    }
  </style>
</head>
<body class="bg-[#FAF4E4] font-dmsans">

  <div class="min-h-screen flex">
    <script src="https://unpkg.com/lucide@latest"></script>

    @include('components.sidebar')

    {{-- Main Content --}}
    <main class="flex-1 p-6">
      <header class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold" id="page-title">Dashboard</h1>
        <div class="text-gray-700 text-lg">Hello, <span class="font-semibold">Fahri Mauludy</span></div>
      </header>
    
      {{-- Dashboard Content --}}
      <div id="dashboardContent" class="content-section space-y-6">
    
        <!-- Two Column Section -->
        <div class="flex flex-col space-y-6">
          <!-- Produk List -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Produk List</h2>
            <ul class="space-y-2 text-gray-700">
              <li>Rumah Minimalis - $30,000</li>
              <li>Villa Bali - $75,000</li>
              <li>Studio Apartment - $20,000</li>
            </ul>
          </div>
    
          <!-- User List -->
          <div class="max-w-full  bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-5">
              <h1 class="text-lg font-bold">List User</h1>
              <form class="flex space-x-2">
                <input
                  type="text"
                  placeholder="Cari User..."
                  class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500"
                />
                <button
                  type="submit"
                  class="bg-black text-white px-3 py-1 rounded text-sm hover:bg-gray-800"
                >
                  Search
                </button>
              </form>
            </div>
            <table class="w-full border-collapse rounded overflow-hidden">
              <thead>
                <tr class="bg-gray-300 text-left text-sm font-medium text-gray-800">
                  <th class="px-4 py-2 rounded-tl">Nama</th>
                  <th class="px-4 py-2">Email</th>
                  <th class="px-4 py-2">Phone</th>
                  <th class="px-4 py-2 rounded-tr">Role</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-t border-gray-200 text-sm">
                  <td class="px-4 py-3">Admin</td>
                  <td class="px-4 py-3">admin@idn.com</td>
                  <td class="px-4 py-3">112233445566</td>
                  <td class="px-4 py-3">
                    <span
                      class="bg-yellow-200 text-yellow-700 text-xs font-semibold px-2 py-0.5 rounded"
                    >
                      Admin
                    </span>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
    

  </div>

 
</body>
</html>
