<x-app-layout>

    <x-slot name="header">
        {{ __("Tambah Nilai") }}
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('tambah-skor') }}" method="POST" class="p-10 bg-white rounded-lg shadow-xl">
            @csrf
            <div>
                <label class="block text-sm text-gray-600" for="skor">Skor</label>
                <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="skor" name="skor" type="number"
                    required placeholder="Masukkan Skor" aria-label="Skor" autofocus>
            </div>
            <div class="mt-6">
                <button class="px-4 py-2 text-white font-light tracking-wider bg-blue-500 rounded"
                    type="submit">Tambah</button>
            </div>
        </form>
    </div>

</x-app-layout>
