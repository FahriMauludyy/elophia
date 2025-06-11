<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Noto+Sans+JP:wght@100..900&display=swap"
        rel="stylesheet">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css') {{-- Pastikan Tailwind sudah terpasang --}}
    <style>
        .font-dmsans {
            font-family: 'DM Sans', sans-serif;
        }

        .font-logo {
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
                <div class="text-gray-700 text-lg">Hello, <span class="font-semibold">{{ Auth::user()->name }}</span>
                </div>
            </header>

            {{-- Add Product Content --}}
            <form id="addProductContent" class="content-section" action="{{ route('products.store') }}" method="POST" 
                enctype="multipart/form-data">
                @csrf
                <div class="bg-white p-6 rounded-lg flex flex-col md:flex-row shadow-md max-w-full h-auto">

                  <div class="w-full md:w-1/2 mb-6 md:mb-0 flex flex-col items-center">
                    <label class="block font-medium mb-2">Upload Product Image</label>
                  
                    <!-- Upload Wrapper -->
                    <div id="upload-area"
                      class="relative w-full h-[350px] max-w-md border border-dashed border-gray-400 rounded-lg flex items-center justify-center bg-gray-50 cursor-pointer hover:bg-gray-100 transition">
                      
                      <!-- Icon + Text -->
                      <div id="upload-placeholder" class="flex flex-col items-center justify-center text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7h4l2-2h6l2 2h4v12H3V7z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11v6m0 0l3-3m-3 3l-3-3" />
                        </svg>
                        <span class="text-sm mt-1">Upload Image</span>
                      </div>
                  
                      <!-- Image Preview -->
                      <img id="image-preview" src="#" alt="Preview"
                        class="absolute top-0 left-0 w-full h-full object-cover rounded-lg hidden" />
                  
                      <!-- Hidden Input -->
                      <input type="file" name="image" id="image" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer" />
                    </div>
                  
                    <!-- Delete Button (di bawah gambar) -->
                    <button type="button" id="delete-image"
                      class="mt-4 bg-red-500 text-white text-sm px-4 py-2 rounded hover:bg-red-600 hidden">
                      Delete Image
                    </button>
                  
                    @error('image')
                      <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                  </div>
                  
                  


                    <!-- Form Input Area -->
                    <div class="w-full md:w-1/2 px-0 md:px-8 flex justify-center items-center">
                        <div class="w-full space-y-4">
                            <div>
                                <label class="block font-medium mb-2">Property Name</label>
                                <input type="text" name="name" class="w-full border rounded p-2" placeholder="Name">
                            </div>
                            <div>
                                <label class="block font-medium mb-2">Architectures</label>
                                <input type="text" name="architectures" class="w-full border rounded p-2"
                                    placeholder="Vincent">
                            </div>
                            <div>
                                <label class="block font-medium mb-2">Price</label>
                                <input type="text" name="price" class="w-full border rounded p-2"
                                    placeholder="From $30,500,-">
                            </div>
                            <div>
                                <label class="block font-medium mb-2">Room Size</label>
                                <input type="text" name="room_size" class="w-full border rounded p-2"
                                    placeholder="11 m²">
                            </div>
                            <button type="submit"
                                class="bg-[#242424] text-white mt-10 w-full px-6 py-3 rounded-l transition">
                                Add Product
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            {{-- Preview Image Script --}}
            <script>
              const imageInput = document.getElementById('image');
              const imagePreview = document.getElementById('image-preview');
              const deleteButton = document.getElementById('delete-image');
              const uploadPlaceholder = document.getElementById('upload-placeholder');
            
              imageInput.addEventListener('change', function () {
                const file = this.files[0];
                if (file) {
                  const reader = new FileReader();
                  reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                    deleteButton.classList.remove('hidden');
                    uploadPlaceholder.classList.add('hidden');
                  }
                  reader.readAsDataURL(file);
                }
              });
            
              deleteButton.addEventListener('click', function () {
                imageInput.value = '';
                imagePreview.src = '#';
                imagePreview.classList.add('hidden');
                deleteButton.classList.add('hidden');
                uploadPlaceholder.classList.remove('hidden');
              });
            </script>
            
            


        </main>

    </div>


</body>

</html>
