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
                <h1 class="text-2xl font-semibold" id="page-title">Dashboard</h1>
                <div class="text-gray-700 text-lg">Hello, <span class="font-semibold">{{ Auth::user()->name }}</span>
                </div>
            </header>

            {{-- Dashboard Content --}}
            <div id="dashboardContent" class="content-section space-y-6">

                <!-- Two Column Section -->
                <div class="flex flex-col space-y-6">
                    
                    <!-- Produk List (Dynamic Cards) -->
                    <h2 class="text-xl font-semibold mb-4">Produk List</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @forelse ($products as $product)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                                <p class="text-sm text-gray-600">Architecture: {{ $product->architectures }}</p>
                                <p class="text-sm text-gray-600">Room Size: {{ $product->room_size }}</p>
                                <p class="text-sm font-semibold text-green-700">Price:
                                    ${{ number_format($product->price, 0, '.', ',') }}</p>
                            </div>
                        </div>
                        @empty
                        <p class="col-span-full text-gray-500">No products available.</p>
                        @endforelse
                    </div>


                    <!-- User List -->
                    <div class="max-w-full bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center mb-5">
                            <h1 class="text-lg font-bold">List User</h1>
                            <form action="{{ route('search') }}" method="GET" class="flex space-x-2">
                                <input name="search" type="text" placeholder="Cari User..."
                                    value="{{ request('search') }}"
                                    class="border border-gray-300 rounded px-3 py-1 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-500" />
                                <button type="submit"
                                    class="bg-black text-white px-3 py-1 rounded text-sm hover:bg-gray-800">
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
                                @forelse ($users as $user)
                                <tr class="border-t border-gray-200 text-sm">
                                    <td class="px-4 py-3">{{ $user->name }}</td>
                                    <td class="px-4 py-3">{{ $user->email }}</td>
                                    <td class="px-4 py-3">{{ $user->phone }}</td>
                                    <td class="px-4 py-3">
                                        <form action="{{ route('users.updateRole', $user->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select name="role" onchange="this.form.submit()"
                                                class="text-sm border-gray-300 rounded px-2 py-1">
                                                <option value="karyawan"
                                                    {{ $user->role === 'karyawan' ? 'selected' : '' }}>Karyawan</option>
                                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>
                                                    Admin</option>
                                            </select>
                                        </form>
                                    </td>


                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center text-sm text-gray-500 py-4">
                                        User not found.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </main>


    </div>



</body>

</html>
