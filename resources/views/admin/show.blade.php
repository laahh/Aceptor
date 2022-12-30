@extends('admin.layout.layout')
@section('content')





<div class="mx-20">





    <h1 class=" my-10 font-Poppins text-4xl font-bold text-slate-600"> {{ $post->tittel }}</h1>
    <div class="flex">
        <a href="/admin-artikel">
            <span
                class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path
                        d="M5 21h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM5 5h14l.001 14H5V5z">
                    </path>
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
                <h1 class="text-base">Back</h1>
            </span>

        </a>

        <a href="admin-artikel/{{ $post->id }}/edit " class="mx-2">
            <span
                class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path
                        d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                    </path>
                    <path
                        d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                    </path>
                </svg>
                <h1 class="text-base">Edit</h1>

            </span>

        </a>


        <form action="/admin-artikel/{{ $post->id }}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" onclick="return confirm('apakah anda ingin menghapus?')"><span
                    class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path
                            d="M20 2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3v3.767L13.277 18H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14h-7.277L9 18.233V16H4V4h16v12z">
                        </path>
                        <path
                            d="M9.707 13.707 12 11.414l2.293 2.293 1.414-1.414L13.414 10l2.293-2.293-1.414-1.414L12 8.586 9.707 6.293 8.293 7.707 10.586 10l-2.293 2.293z">
                        </path>
                    </svg>
                    <h1 class="text-base">Delete</h1>

                </span></button>
        </form>

    </div>

    @if ($post->image)
    <img class="w-64 h-auto rounded-lg float-left mr-6 mt-5" src="{{ asset('storage/' . $post->image) }}"
        alt="image description">

    @else
    <img class="w-64 h-auto rounded-lg float-left mr-6 mt-5"
        src="https://images.unsplash.com/photo-1631651363531-fd29aec4cb5c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=476&q=80"
        alt="image description">

    @endif




    <p class="mb-5 font-Poppins text-base">{!!html_entity_decode($post->body)!!}</p>




    {{-- <a href="/admin-artikel"><button type="button"
            class="text-white mt-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</button>
    </a> --}}
</div>
@endsection