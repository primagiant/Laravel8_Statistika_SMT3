@php
use App\Helpers\Main;
@endphp
@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-black pb-6">Metode Lilliefors</h1>

    <div class="">
        <div class="bg-gray-50 overflow-auto shadow">
            <table class="text-left w-full border-collapse">
                <thead class="bg-sidebar text-white text-center">
                    <tr>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nilai
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Frekuensi Kumulatif
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Zi
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            F(Zi)
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            S(Zi)
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            |F(Zi) - S(Zi)|
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $fk = 0 @endphp
                    @foreach ($skor as $item)
                        <tr class="hover:bg-grey-lighter text-center">
                            <td class="py-4 px-6 border-b border-grey-light">{{ $item['key'] }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $fk += $item['value'] @endphp
                                {{ $fk }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $zi = ($item['key'] - $avg) / $sd @endphp
                                {{ round($zi, 3) }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $fZi = Main::getZScoreProbability($zi) @endphp
                                {{ $fZi }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $sZi = $fk/$jmlData @endphp
                                {{ $sZi }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $fsZi = abs($fZi - $sZi) @endphp
                                {{ $fsZi }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
