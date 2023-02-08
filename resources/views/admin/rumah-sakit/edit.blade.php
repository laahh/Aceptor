@extends('admin.layout.layout')
@section('content')

<div>
    <h1 class="mx-10">Create New Artikel</h1>
</div>

<div class="mx-10 mt-10">

    <form method="POST" action="{{ route('rumah-sakit.update',$rumahsakit->id) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="nama_rs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama Rumah Sakit</label>
                <input type="text" id="nama_rs"
                    class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                    required autofocus name="nama_rs" value="{{ $rumahsakit->nama_rs }}">

            </div>
            <div>
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Rumah
                    Sakit</label>
                <input type="text" id="alamat"
                    class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required name="alamat" value="{{ $rumahsakit->alamat }}">
            </div>
        </div>


        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                Image</label>
            <input type="hidden" name="oldImage" value="{{ $rumahsakit->image }}">
            @if($rumahsakit->image)
            <img src="{{asset('storage/'.$rumahsakit->image)}}" class="w-80 rounded-md img-preview" alt="image">
            @else
            <img class="w-80 rounded-md img-preview">

            @endif
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="image" type="file" name="image" onchange="previewImage()">

        </div>





        <button type="submit" onclick="swal('Good job!', 'Artikel Berhasil Dibuat!', 'success')"
            class="mt-5 create inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Tambah Rumah Sakit
        </button>









    </form>
</div>

<script>
    const tittel = document.querySelector('#tittel');
    const slug = document.querySelector('#slug');

    tittel.addEventListener('change', function() {
        fetch('/admin-artikel/CheckSlug?tittel=' + tittel.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }

   
</script>

{{-- <script>
    $('.create').click(function ()){
    swal("Good job!", "You clicked the button!", "success");
    }
</script> --}}


@endsection