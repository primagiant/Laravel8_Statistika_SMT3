@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-black pb-6">Tabel Frekuensi</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
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
                    @foreach ($skor as $item)
                        <tr class="hover:bg-grey-lighter text-center">
                            <td class="py-4 px-6 border-b border-grey-light">{{ $item['key'] }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $item['value'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
                            <td class="py-4 px-6 border-b border-grey-light">{{ $min }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $max }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $avg }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
