@extends('user.layout.layout')
@section('content')

<div class=" mx-5 md:mx-20">


        <h1 class=" mt-10 mb-5 font-Poppins text-3xl text-center md:w-[600px] mx-auto font-bold text-slate-600"> {{
                $post->tittel }}
        </h1>
        {{-- menampilkan categori hasil dari relasi antar tabel post dengan category --}}
        {{-- <p class="mb-5 mt-1">By Aprils in <a href="/categories/{{ $post->category->slug }}">{{
                        $post->category->name
                        }}</a>
        </p> --}}
        @if ($post->image)
        <img class="h-56 w-full object-cover" src="{{ asset('storage/' . $post->image) }}" alt="image description">

        @else
        <img alt="Office"
                src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                class="h-56 w-full object-cover" />

        @endif

        <p class="mb-5 font-Poppins text-base">{!!html_entity_decode($post->body)!!}</p>




        <a href="/artikel"><button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</button>
        </a>
</div>
@endsection