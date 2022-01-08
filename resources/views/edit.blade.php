@extends('layouts.app')

@section('content')
    <h1 class="text-3xl text-black pb-6">Edit Skor</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <form action="{{ route('update') }}" method="POST" class="p-10 bg-white rounded-lg shadow-xl">
            @csrf
            @method('put')
            <div>
                <label class="block text-sm text-gray-600" for="skor">Skor</label>
                <input type="hidden" name="id" value="{{ $skor['id'] }}">
                <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="skor" name="skor" type="number"
                    required placeholder="Masukkan Skor" aria-label="Skor" value="{{ $skor['skor'] }}" autofocus required>
            </div>
            <div class="mt-6">
                <button class="px-4 py-2 text-white font-light tracking-wider bg-yellow-500 rounded"
                    type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
