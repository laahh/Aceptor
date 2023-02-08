@extends('user.layout.layout')
@section('content')
{{-- recomendation hospital card --}}
<div class="mx-10 my-10 font-Poppins">
    <h1 class="text-xl">Rekomendasi Rumah Sakit </h1>
    <p class="text-sm mb-4">Berikut adalah rekomendasi rumah sakit untuk penderita TBC</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        @foreach($rumahsakits as $rumahsakit)
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="bg-cover bg-center h-56 p-4"
                style="background-image: url({{ asset('storage/' . $rumahsakit->image) }})">
            </div>
            <div class="p-4">
                <h1 class="text-xl font-bold text-gray-700">{{ $rumahsakit->nama_rs }}</h1>
                <p class="mt-2 text-gray-600">{{ $rumahsakit->alamat }}</p>
            </div>

        </div>

        @endforeach


    </div>

    @endsection