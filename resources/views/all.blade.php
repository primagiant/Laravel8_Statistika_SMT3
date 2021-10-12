<x-app-layout>

    <x-slot name="header">
        {{ __("List All Data") }}
    </x-slot>


    <div class="w-full shadow-lg">
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
</x-app-layout>
