@php
use App\Helpers\Main;
@endphp

@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-black pb-6">Tabel Chi Kuadrat</h1>

    <div class="">
        <div class="bg-gray-50 overflow-auto shadow">
            <table class="text-left w-full border-collapse">
                <thead class="bg-sidebar text-white text-center">
                    <tr>
                        <th rowspan="2"
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nilai
                        </th>
                        <th rowspan="2"
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Frekuensi
                        </th>
                        <th colspan="2"
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Batas Kelas
                        </th>
                        <th colspan="2"
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nilai Z
                        </th>
                        <th colspan="2"
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Z Table
                        </th>
                        <th rowspan="2"
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Proporsi
                        </th>
                        <th rowspan="2"
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            fe
                        </th>
                        <th rowspan="2"
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Chi<br>Kuadrat
                        </th>
                    </tr>
                    <tr>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Atas
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Bawah
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Atas
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Bawah
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Atas
                        </th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Bawah
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $chiKuadratKumulatif = 0 @endphp
                    @foreach ($skor as $item)
                        <tr class="hover:bg-grey-lighter text-center">
                            <td class="py-4 px-6 border-b border-grey-light">{{ $item['down'] }} - {{ $item['up'] }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">{{ $item['freq'] }}</td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $bBawah = $item['down'] - 0.5 @endphp
                                {{ $bBawah }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $bAtas = $item['up'] + 0.5 @endphp
                                {{ $bAtas }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $zScoreDown = round((($bBawah)-$avg) / $sd, 3, PHP_ROUND_HALF_DOWN) @endphp
                                {{ $zScoreDown }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $zScoreUp = round((($bAtas)-$avg) / $sd, 3, PHP_ROUND_HALF_DOWN) @endphp
                                {{ $zScoreUp }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $zTableDown = Main::getZScoreProbability($zScoreDown) @endphp
                                {{ $zTableDown }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $zTableUp = Main::getZScoreProbability($zScoreUp) @endphp
                                {{ $zTableUp }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $proporsi = abs($zTableDown - $zTableUp) @endphp
                                {{ $proporsi }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php $freqEkpetasi = $proporsi * $jmlData @endphp
                                {{ $freqEkpetasi }}
                            </td>
                            <td class="py-4 px-6 border-b border-grey-light">
                                @php
                                    $chiKuadrat = (($item['freq'] - $freqEkpetasi) * ($item['freq'] - $freqEkpetasi)) / $freqEkpetasi;
                                    $chiKuadratKumulatif += $chiKuadrat;
                                @endphp
                                {{ round($chiKuadrat, 6) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="w-full py-3 px-6 mt-3 bg-gray-50 shadow">
        <p class="font-bold float-left">
            Nilai Total Chi Kuadrat
        </p>
        <p class="font-bold float-right">
            {{ round($chiKuadratKumulatif, 6) }}
        </p>
        <div class="clear-both"></div>
    </div>

@endsection
