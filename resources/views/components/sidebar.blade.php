<aside class="w-52 bg-[#242424] rounded-lg m-3 shadow-lg hidden md:flex flex-col justify-between">
    <!-- Logo -->
    <div>
      <div class="p-6 text-3xl font-logo text-white">
        Elophia
      </div>
  
      <!-- Navigation Menu -->
      <nav class="px-6 mt-4 text-white space-y-2">
        <a href="{{route('dashboard')}}" id="menu-dashboard" class="   {{ request()->routeIs('admin.dashboard') ? 'bg-[#383838]' : 'bg-[#242424] ' }} flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#383838] transition-colors">
          <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
          Dashboard
        </a>
        <a href="{{route('admin.add-product')}}" id="menu-add" class="   {{ request()->routeIs('admin.add-product') ? 'bg-[#383838]' : 'bg-[#242424] ' }} flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#383838] transition-colors">
          <i data-lucide="plus-circle" class="w-5 h-5"></i>
          Add Product
        </a>
      </nav>
    </div>
  
    <!-- Logout -->
    <div class="px-6 mb-4">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="flex items-center gap-3 px-3 py-2 text-[#242424] rounded-lg hover:bg-[#b8b8b8] bg-white transition-colors">
          <i data-lucide="log-out" class="w-5 h-5"></i>
          Logout
        </button>
    </form>
      
    </div>
  </aside>

  <script>
    lucide.createIcons(); // Aktifkan ikon

    
  </script>

  