@extends('user.layout.layout')
@section('content')


{{-- button role dokter --}}
@role('dokter')
<div class="col-end-7 col-span-2 mt-10">
    <button
        class="mx-5 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button" data-modal-toggle="medium-modal-1">
        + Create Konsultasi
    </button>
</div>
@endrole

<div id="medium-modal-1" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-toggle="medium-modal-1">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create Room Konsultasi</h3>
                <form method="POST" action="/konsultasi" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="namaDokter"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama Dokter</label>
                            <input type="text" id="namaDokter"
                                class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                required autofocus name="namaDokter">

                        </div>
                        <div>
                            <label for="spesialis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Spesialis</label>
                            <input type="text" id="spesialis"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required name="spesialis">
                        </div>


                    </div>

                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                            Image</label>
                        <img class="w-80 rounded-md img-preview">
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="image" type="file" name="image" onchange="previewImage()">

                    </div>

                    <button type="submit" onclick="swal('Good job!', 'Room Konsultasi Berhasil Dibuat!', 'success')"
                        class=" create inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Create Konsultasi
                    </button>









                </form>
            </div>
        </div>
    </div>
</div>


<div class="mx-5 grid grid-cols-1 sm:grid-cols-1 gap-6 md:grid-cols-3 lg:grid-cols-3 mt-10 mb-10">

    @foreach($konsultasi as $konsul)
    <div
        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-end px-4 pt-4">
            @role('dokter')
            {{-- <button id="dropdownButton1" data-dropdown-toggle="dropdown1"
                class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
            </button> --}}
            <!-- Dropdown menu -->
            {{-- <div id="dropdown1"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton1">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <a href="/detail-konsultasi"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Detail</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                    </li>
                </ul>
            </div> --}}

            @if (Auth::user()->id == $konsul->user_id)
            <button
                class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg"
                type="button" data-modal-toggle="modalDescription">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: #577CFF;transform: ;msFilter:;">
                    <path
                        d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                    </path>
                    <path
                        d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                    </path>
                </svg>

            </button>




            <div id="modalDescription" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="modalDescription">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Room Konsultasi
                            </h3>
                            <form method="POST" action="/konsultasi/{{ $konsul->id }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div>
                                        <label for="namaDokter"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Nama Dokter</label>
                                        <input type="text" id="namaDokter"
                                            class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                            required autofocus name="namaDokter" value="{{ $konsul->namaDokter }}">

                                    </div>
                                    <div>
                                        <label for="spesialis"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Spesialis</label>
                                        <input type="text" id="spesialis"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required name="spesialis" value="{{ $konsul->spesialis }}">
                                    </div>


                                </div>

                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="image">Upload
                                        Image</label>
                                    <input type="hidden" name="oldImage" value="{{ $konsul->image }}">
                                    @if($konsul->image)
                                    <img src="{{asset('storage/'.$konsul->image)}}" class="w-80 rounded-md img-preview"
                                        alt="image">
                                    @else
                                    <img class="w-80 rounded-md img-preview">

                                    @endif
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="image" type="file" name="image" onchange="previewImage()">

                                </div>

                                <button type="submit"
                                    onclick="swal('Good job!', 'Room Konsultasi Berhasil Dibuat!', 'success')"
                                    class=" create inline-flex items-center px-3 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                    Update
                                </button>









                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endrole
        </div>


        <div class="flex mx-10 items-start pb-10">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <img class="w-16 h-16 rounded-full" src="{{ asset('storage/' . $konsul->image) }}" alt="">

                </div>
                <div class="font-medium dark:text-white">
                    <div>{{ $konsul->namaDokter }}</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">{{ $konsul->spesialis }}</div>
                </div>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">


            </div>



        </div>
        <hr class="bg-slate-700 ">
        <div class=" ml-3 my-3  ">
            <h1 class="text-lg text-gray-700"><span class="text-gray-900 font-bold">28</span> reviews
            </h1>

            <div class="flex justify-between items-center mb-2">
                <div class="inline-flex -mx-px">
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>




                </div>

                <div>
                    <a href="#"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 mx-3  py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chat</a>

                </div>









            </div>
        </div>







    </div>

    @endforeach

    @role('pengguna')
    @foreach($konsultasis as $konsul)
    <div
        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-end px-4 pt-4">
            @role('dokter')
            <button id="dropdownButton1" data-dropdown-toggle="dropdown1"
                class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown1"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton1">
                    <li>
                        <a href="#" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <a href="/detail-konsultasi"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Detail</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                    </li>
                </ul>
            </div>
            @endrole
        </div>


        <div class="flex mx-10 items-start pb-10">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <img class="w-16 h-16 rounded-full" src="{{ asset('storage/' . $konsul->image) }}" alt="">
                    {{-- <img class="w-16 h-16 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
                        src="{{ asset('storage/' . $konsul->image) }}" alt="Bordered avatar"> --}}
                </div>
                <div class="font-medium dark:text-white">
                    <div>{{ $konsul->namaDokter }}</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">{{ $konsul->spesialis }}</div>
                </div>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">


            </div>



        </div>
        <hr class="bg-slate-700 ">
        <div class=" ml-3 my-3  ">
            <h1 class="text-lg text-gray-700"><span class="text-gray-900 font-bold">28</span> reviews
            </h1>

            <div class="flex justify-between items-center mb-2">
                <div class="inline-flex -mx-px">
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>




                </div>

                <div>
                    <a href="#"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 mx-3  py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chat</a>

                </div>









            </div>
        </div>







    </div>

    @endforeach

    @endrole

    <div id="mediummodal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="medium-modal-1">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create Room Konsultasi</h3>
                    <form method="POST" action="/konsultasi" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="namaDokter"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Nama Dokter</label>
                                <input type="text" id="namaDokter"
                                    class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                    required autofocus name="namaDokter">

                            </div>
                            <div>
                                <label for="spesialis"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Spesialis</label>
                                <input type="text" id="spesialis"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required name="spesialis">
                            </div>


                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="image">Upload
                                Image</label>
                            <img class="w-80 rounded-md img-preview">
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="image" type="file" name="image" onchange="previewImage()">

                        </div>

                        <button type="submit" onclick="swal('Good job!', 'Room Konsultasi Berhasil Dibuat!', 'success')"
                            class="mt-5 create inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Publish post
                        </button>









                    </form>
                </div>
            </div>
        </div>
    </div>







</div>









<script>
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



<script>
    function removeChild(e){
      e.remove()
    }
    

    public int checkAssesment(int n){
      int result = 0;
      for(int i = 0; i*i <n; i++){
        result += i;
      }

      return result;
    }

    function tambahChild(e, id)
    {
      
      let parent = e.parentNode;
      let buyut = parent.parentNode;
      
      
      
      let relativeChild = document.createElement('div');
      relativeChild.className = "relative";
      
      let child1Relative = document.createElement('input');
      child1Relative.className = 'block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
      child1Relative.placeholder = 'qualification';
      child1Relative.name = `requirement[${id}][qualification][]`;
      
      
      let child2Relative = document.createElement('button');
      child2Relative.type = 'button';
      child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800';
      childIconRelative = document.createElement('i')
      childIconRelative.className = 'bx bxs-minus-circle'
      child2Relative.appendChild(childIconRelative);
      child2Relative.onclick = () =>{
        removeChild(relativeChild);
      }
      
      relativeChild.appendChild(child1Relative)
      relativeChild.appendChild(child2Relative)
      
      buyut.appendChild(relativeChild);
      
    }
    
    
    let count = 0;
    
    function tambah(){
      
      
      let id = ++count;
      let el = document.getElementById('requirement');
      
      let parent = document.createElement('div');
      parent.className = 'flex justify-between gap-x-2 flex-row items-center mb-3';
      
      let parentInput1 = document.createElement('div');
      parentInput1.className = 'basis-[30%]';
      let child1 = document.createElement('input');
      child1.name = `requirement[${id}][role]`;
      child1.className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white';
      child1.placeholder = 'role...'
      parentInput1.appendChild(child1)
      
      
      let parentInput2 = document.createElement('div');
      parentInput2.className = 'basis-[40%]';
      
      let relativeChild = document.createElement('div');
      relativeChild.className = "relative";
      
      let child1Relative = document.createElement('input');
      child1Relative.className = 'block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
      child1Relative.placeholder = 'qualification';
      child1Relative.name = `requirement[${id}][qualification][]`;
      
      let child2Relative = document.createElement('button');
      child2Relative.type = 'button';
      child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800';
      childIconRelative = document.createElement('i')
      childIconRelative.className = 'bx bxs-plus-circle'
      child2Relative.appendChild(childIconRelative);
      child2Relative.onclick = (id) =>{
        tambahChild(child2Relative, count);
      }
      
      relativeChild.appendChild(child1Relative)
      relativeChild.appendChild(child2Relative)
      
      
      
      parentInput2.appendChild(relativeChild);
      
      let parentInput3 = document.createElement('div');
      parentInput3.className = 'basis-1/8';
      let button = document.createElement('button');
      button.type = 'button';
      let icon = document.createElement('i');
      icon.className='bx bxs-minus-circle';
      button.appendChild(icon);
      button.onclick = () => {
        remove(button);
      }
      parentInput3.appendChild(button);
      
      let parentInput4 = document.createElement('div');
      parentInput4.className = 'basis-[30%]'
      parentInput4.innerHTML = `<input type="text" name="requirement[${id}][salary]" id="requirement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="salary..." required>`
      
      parent.appendChild(parentInput1)
      parent.appendChild(parentInput4)
      parent.appendChild(parentInput2)
      parent.appendChild(parentInput3)
      
      
      el.appendChild(parent)
    }
    
    function sweatAlert()
    {
      Swal.fire(
      'Create Team Success',
      'You clicked the button!',
      'success'
      )
    }
    
    function remove(e) {
      let parent1 = e.parentNode;
      parent1.parentNode.remove();
    }
    
    
</script>

@endsection