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
        <h1 class="text-2xl font-semibold" id="page-title">Add Product</h1>
        <div class="text-gray-700 text-lg">Hello, <span class="font-semibold">{{ Auth::user()->name }}</span></div>
      </header>

      {{-- Add Product Content --}}
      <div id="addProductContent" class="content-section">
        <div class="bg-white p-6 rounded-lg flex flex-col md:flex-row shadow-md max-w-full h-auto">
          
          <!-- Image Area -->
          <div class="w-full md:w-1/2 mb-6 md:mb-0">
            <img src="assets/images/blog1.jpg"
                 alt="Product Image"
                 class="w-full h-full max-h-[450px] object-cover" />
          </div>
      
          <!-- Form Area -->
          <div class="w-full md:w-1/2 px-0 md:px-8 flex justify-center items-center">
            <form class="w-full space-y-4">
              <div>
                <label class="block font-medium mb-2">Property Name</label>
                <input type="text" class="w-full border rounded p-2" placeholder="Name">
              </div>
              <div>
                <label class="block font-medium mb-2">Architectures</label>
                <input type="text" class="w-full border rounded p-2" placeholder="Vincent">
              </div>
              <div>
                <label class="block font-medium mb-2">Price</label>
                <input type="text" class="w-full border rounded p-2" placeholder="From $30,500,-">
              </div>
              <div>
                <label class="block font-medium mb-2">Room Size</label>
                <input type="text" class="w-full border rounded p-2" placeholder="11 m²">
              </div>
              <button type="submit" class="bg-[#242424] text-white mt-10 w-full px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
                Add Product
              </button>
            </form>
          </div>
      
        </div>
      </div>
      
      
    </main>

  </div>

 
</body>
</html>
