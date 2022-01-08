<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ route('dashboard') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">
            LASTIKA
        </a>
        <a href="{{ route('tambah-skor') }}"
            class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> Tambah Skor
        </a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}"
            class="{{ Route::is('dashboard') ? 'flex items-center active-nav-link text-white py-4 pl-6 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item' }}">
            <i class="fas fa-align-left mr-3"></i>
            List Skor
        </a>
        <a href="{{ route('tabel-frekuensi') }}"
            class="{{ Route::is('tabel-frekuensi') ? 'flex items-center active-nav-link text-white py-4 pl-6 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item' }}">
            <i class="fas fa-sticky-note mr-3"></i>
            Tabel Frekuensi
        </a>
        <a href="{{ route('data-bergolong') }}"
            class="{{ Route::is('data-bergolong') ? 'flex items-center active-nav-link text-white py-4 pl-6 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item' }}">
            <i class="fas fa-table mr-3"></i>
            Data Bergolong
        </a>
        <a href="{{ route('chi-kuadrat') }}"
            class="{{ Route::is('chi-kuadrat') ? 'flex items-center active-nav-link text-white py-4 pl-6 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item' }}">
            <i class="fas fa-robot mr-3"></i>
            Chi Kuadrat
        </a>
        <a href="{{ route('lilliefors') }}"
            class="{{ Route::is('lilliefors') ? 'flex items-center active-nav-link text-white py-4 pl-6 nav-item' : 'flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item' }}">
            <i class="fas fa-robot mr-3"></i>
            Lilliefors
        </a>
    </nav>
</aside>
