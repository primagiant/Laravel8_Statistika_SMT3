<x-app-layout>

    <x-slot name="header">
        {{ __("List All Data") }}
    </x-slot>


    <div class="w-full shadow-lg">
        <div class="mb-3 text-white">
            <a href="{{ route('export-skor') }}" class="bg-green-600 hover:bg-green-700 px-4 py-2 shadow rounded">
                Export Excel
            </a>
            <button type="button" id="openModal"
                class="ml-1.5 bg-yellow-600 hover:bg-yellow-700 px-4 py-2 shadow rounded">
                Import Excel
            </button>
        </div>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse">
                <thead class="bg-sidebar text-white text-center">
                    <tr>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nilai
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light w-64">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skors as $skor)
                    <tr class="hover:bg-grey-lighter text-center">
                        <td class="py-4 px-6 border-b border-grey-light">{{$skor['skor']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="{{ route('edit-skor',[$skor['id']] ) }}"
                                class="px-4 py-2 bg-yellow-400 hover:bg-yellow-500 rounded-md">Edit</a>
                            <form onsubmit="return confirm('Yakin ?')" class="inline"
                                action="{{ route('delete-skor') }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $skor['id'] }}">
                                <button id="delete"
                                    class="px-2.5 py-1.5 bg-red-500 hover:bg-red-600 rounded-md text-white"
                                    type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="py-3 bg-white px-3 rounded-b-lg">
            {{$skors->links()}}
        </div>
    </div>

    <div id="modal" class="hidden fixed bg-blue-50 top-0 bottom-0 left-0 right-0 z-20 bg-opacity-80">
        <div class="flex justify-center items-center h-full">
            <div class="bg-gray-50 flex flex-col justify-between items-center h-64 w-96 shadow-lg border">
                <p class="text-xl mt-6 font-bold uppercase">Import Excel File</p>
                <form action="{{ route('import-skor') }}" method="POST" enctype="multipart/form-data" class="mt-6">
                    @csrf
                    <input type="file" name="file" required>
                    <div class="mt-5">
                        <button type="submit"
                            class="bg-yellow-600 hover:bg-yellow-700 px-4 py-2 shadow rounded text-white float-right">
                            Import
                        </button>
                    </div>
                </form>
                <button id="closeModal" class="animate-bounce relative mb-2">
                    <i class="fas fa-times-circle text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        let open = document.getElementById('openModal');
        let close = document.getElementById('closeModal');
        let modal = document.getElementById('modal');

        open.addEventListener('click', function() {
            modal.classList.toggle('hidden');
        })

        close.addEventListener('click', function() {
            modal.classList.toggle('hidden');
        })


    </script>
</x-app-layout>
