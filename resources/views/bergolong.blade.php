<x-app>

    <x-slot name="header">
        {{ __("Tabel Data Bergolong") }}
    </x-slot>


    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
        <div class="bg-white overflow-auto shadow-lg">
            <table class="text-left w-full border-collapse">
                <thead class="bg-sidebar text-white text-center">
                    <tr>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nilai
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Frekuensi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skor as $s)
                    <tr class="hover:bg-grey-lighter text-center">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $s['down'] }} - {{ $s['up'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $s['freq'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex flex-col gap-2">
            <div>
                <div class="bg-white overflow-auto shadow-lg">
                    <table class="text-left w-full border-collapse">
                        <thead class="bg-sidebar text-white text-center">
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Min
                                </th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Max
                                </th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Avg
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-grey-lighter text-center">
                                <td class="py-4 px-6 border-b border-grey-light">{{$min}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{$max}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{$avg}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <div class="bg-white overflow-auto shadow-lg">
                    <table class="text-left w-full border-collapse">
                        <thead class="bg-sidebar text-white text-center">
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Jumlah Data
                                </th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Jangkauan
                                </th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Jumlah Kelas
                                </th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Panjang Kelas
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-grey-lighter text-center">
                                <td class="py-4 px-6 border-b border-grey-light">{{$jmlData}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{$jangkauan}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{$jmlKelas}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{$pjgKelas}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
