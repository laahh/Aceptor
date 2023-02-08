@extends('admin.layout.layout')
@section('content')

<div class="mx-10 mt-10">
    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
        <div class="bg-cover bg-center h-56 p-4"
            style="background-image: url({{ asset('storage/' . $rumahsakit->image) }})">
        </div>
        <div class="p-4">
            <h1 class="text-xl font-bold text-gray-700">{{ $rumahsakit->nama_rs }}</h1>
            <p class="mt-2 text-gray-600">{{ $rumahsakit->alamat }}</p>
        </div>

    </div>
</div>



@endsection