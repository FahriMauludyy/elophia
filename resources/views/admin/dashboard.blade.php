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

    {{-- Sidebar --}}
    <aside class="w-52 bg-[#242424] rounded-lg m-3 shadow-lg hidden md:block">
      <div class="p-6 text-3xl  font-logo text-white">
        Elophia
      </div>
      <nav class="px-6 mt-6 text-white space-y-4">
        <a href="#" class="block">Dashboard</a>
        <a href="#" class="block">Add Product</a>
      </nav>
    </aside>

    {{-- Main Content --}}
    <main class="flex-1 p-6">
      <header class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
        <div class="text-gray-700">Hello, <span class="font-medium">Admin</span></div>
      </header>

      {{-- Form Tambah Produk --}}
      <div class="bg-white p-6 rounded-lg shadow-md max-w-3xl">
        <form action="#" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-4">
            <label class="block mb-1 font-medium">Product Name</label>
            <input type="text" name="name" class="w-full border rounded-lg p-2 focus:outline-none focus:ring focus:border-indigo-400" required>
          </div>

          <div class="mb-4">
            <label class="block mb-1 font-medium">Price</label>
            <input type="number" name="price" class="w-full border rounded-lg p-2 focus:outline-none focus:ring focus:border-indigo-400" required>
          </div>

          <div class="mb-4">
            <label class="block mb-1 font-medium">Category</label>
            <select name="category" class="w-full border rounded-lg p-2 focus:outline-none focus:ring focus:border-indigo-400" required>
              <option value="" disabled selected>Select Category</option>
              <option value="clothing">Clothing</option>
              <option value="electronics">Electronics</option>
              <option value="accessories">Accessories</option>
            </select>
          </div>

          <div class="mb-4">
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" rows="4" class="w-full border rounded-lg p-2 focus:outline-none focus:ring focus:border-indigo-400"></textarea>
          </div>

          <div class="mb-4">
            <label class="block mb-1 font-medium">Product Image</label>
            <input type="file" name="image" class="w-full text-sm text-gray-600">
          </div>

          <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition duration-200">
            Add Product
          </button>
        </form>
      </div>
    </main>

  </div>

</body>
</html>
