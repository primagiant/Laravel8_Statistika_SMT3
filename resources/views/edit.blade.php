<x-app-layout>

    <x-slot name="header">
        {{ __("Edit Skor") }}
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('update') }}" method="POST" class="p-10 bg-white rounded-lg shadow-xl">
            @csrf
            <div>
                <label class="block text-sm text-gray-600" for="skor">Skor</label>
                <input type="hidden" name="id" value="{{ $skor['id'] }}">
                <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="skor" name="skor" type="text"
                    required placeholder="Masukkan Skor" aria-label="Skor" value="{{$skor['skor']}}">
                <div class="w-10/12 mt-2">
                    <p class="text-xs text-gray-500">Jika ingin memasukkan lebih dari satu skor gunakan tanda koma
                        <strong class="text-gray-900">","</strong>
                    </p>
                </div>
            </div>
            <div class="mt-6">
                <button class="px-4 py-2 text-white font-light tracking-wider bg-yellow-500 rounded"
                    type="submit">Update</button>
            </div>
        </form>
    </div>

</x-app-layout>
