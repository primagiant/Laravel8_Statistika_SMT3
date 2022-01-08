<header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="{{ route('dashboard') }}"
            class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Lastika</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="{{ route('tambah-skor') }}"
            class="{{ Route::is('tambah-skor') ? 'flex items-center active-nav-link text-white py-2 pl-4 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item' }}">
            <i class="fas fa-plus mr-3"></i>
            Tambah Skor
        </a>
        <a href="{{ route('dashboard') }}"
            class="{{ Route::is('dashboard') ? 'flex items-center active-nav-link text-white py-2 pl-4 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item' }}">
            <i class="fas fa-align-left mr-3"></i>
            List Skor
        </a>
        <a href="{{ route('tabel-frekuensi') }}"
            class="{{ Route::is('tabel-frekuensi') ? 'flex items-center active-nav-link text-white py-2 pl-4 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item' }}">
            <i class="fas fa-sticky-note mr-3"></i>
            Tabel Frekuensi
        </a>
        <a href="{{ route('data-bergolong') }}"
            class="{{ Route::is('data-bergolong') ? 'flex items-center active-nav-link text-white py-2 pl-4 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item' }}">
            <i class="fas fa-table mr-3"></i>
            Data Bergolong
        </a>
        <a href="{{ route('chi-kuadrat') }}"
            class="{{ Route::is('chi-kuadrat') ? 'flex items-center active-nav-link text-white py-2 pl-4 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item' }}">
            <i class="fas fa-robot mr-3"></i>
            Chi Kuadrat
        </a>
        <a href="{{ route('lilliefors') }}"
            class="{{ Route::is('lilliefors') ? 'flex items-center active-nav-link text-white py-2 pl-4 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item' }}">
            <i class="fas fa-robot mr-3"></i>
            Lilliefors
        </a>
    </nav>
</header>
