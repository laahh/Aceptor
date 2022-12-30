@extends('user.layout.layout')
@section('content')



<div>
    <h1 class="mx-10 my-5 font-Poppins">Artikel </h1>
</div>

<form action="/artikel" class="block mx-5 mb-5 md:hidden">

    @if (request('category'))
    <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
            Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown"
            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
            type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg></button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700"
            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                </li>
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                </li>
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                </li>
                <li>
                    <button type="button"
                        class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                </li>
            </ul>
        </div>
        <div class="relative w-full">
            <input type="search" id="search-dropdown"
                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                placeholder="Search..." name="search" value="{{ request('search') }}" required>
            <button type="submit"
                class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>



@if($posts->count())


<article class="overflow-hidden rounded-lg border mx-5 border-gray-100  shadow-sm transition hover:shadow-lg">
    @if ($posts[0]->image)
    <img class="h-56 w-full object-cover" src="{{ asset('storage/' . $posts[0]->image) }}" alt="image description">

    @else
    <img alt="Office"
        src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
        class="h-56 w-full object-cover" />

    @endif



    <div class="p-4 sm:p-6">
        <a href="#">
            <h3 class="text-lg font-medium text-gray-900">
                {{ $posts[0]->tittel }}
            </h3>
        </a>

        <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
            {{ $posts[0]->excerpt }}
        </p>

        <a href="post/{{ $posts[0]->slug}}"
            class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
            Read More

            <span aria-hidden="true" class="block transition group-hover:translate-x-0.5">
                &rarr;
            </span>
        </a>
    </div>
</article>







{{-- <div
    class="max-w-xl items-center lg:mt-10 p-6 mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <img src="" alt="">

    <h5 class=" mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $posts[0]->tittel }}<span
            class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
            <a href="/blog?category={{ $posts[0]->category->slug }} ">{{ $posts[0]->category->name }}</a> </span> </h5>


    <p class="mb-2"> <a href=""></a> at: {{
        $posts[0]->created_at->diffForHumans() }} </p>
    <p class=" mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
    <a href="post/{{ $posts[0]->slug}}"
        class=" inline-flex mx-auto items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Read more
        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </a>
</div> --}}

<!--
  This component uses @tailwindcss/line-clamp

  yarn add @tailwindcss/line-clamp
  npm install @tailwindcss/line-clamp

  plugins: [require('@tailwindcss/line-clamp')]
-->

<div class="mx-6 grid grid-cols-1 sm:grid-cols-1 gap-6 md:grid-cols-3 lg:grid-cols-3 mt-10 mb-10">
    @foreach($posts->skip(1) as $post)
    <article class="overflow-hidden rounded-lg border border-gray-100 shadow-sm  transition hover:shadow-lg">
        @if ($post->image)
        <img class="h-56 w-full object-cover" src="{{ asset('storage/' . $post->image) }}" alt="image description">

        @else
        <img alt="Office"
            src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            class="h-56 w-full object-cover" />

        @endif



        <div class="p-4 sm:p-6">
            <a href="post/{{ $post->slug}}">
                <h3 class="text-lg font-medium text-gray-900">
                    {{ $post->tittel }}
                </h3>
            </a>

            <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
                {{ $post->excerpt }}
            </p>

            <a href="post/{{ $post->slug}}"
                class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                Read More

                <span aria-hidden="true" class="block transition group-hover:translate-x-0.5">
                    &rarr;
                </span>
            </a>
        </div>
    </article>
    @endforeach

</div>











{{-- <div class=" mx-6 grid grid-cols-1 sm:grid-cols-1 gap-6 md:grid-cols-3 lg:grid-cols-3 mt-10 mb-20"> --}}

    {{-- @foreach($posts->skip(1) as $post) --}}

    {{-- skip 1 to skip the first post in the loop --}}
    {{-- <div class="shadow-lg rounded-t-md overflow-hidden ">
        <div class="">
            <img class="w-sm"
                src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60"
                alt="" />
            <div class="p-2 relative">
                <p class="text-lg mt-6 font-semibold">{{ $post->tittel }}</p>
                <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{
                    $post->category->name }}</span>
                <p>{{ $post->excerpt}}</p>
                <div class="flex -space-x-4 justify-between mt-1">
                    <div>
                    </div>
                    <div class="">
                        <button type="button"
                            class="text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
                                href="post/{{ $post->slug}}">Detail</a></button>
                    </div>
                </div>


                <img class="h-12 w-12 rounded-full absolute -top-6 p-0.5 border-2 right-6"
                    src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                    alt="" />
            </div>
        </div>
    </div> --}}

    {{-- @endforeach --}}
    {{-- </div> --}}

<div class="mx-10">
    {{ $posts->links() }}

</div>



@else

<p class="text-2xl text-center">Tidak ada Artikel yang anda cari </p>

@endif










@endsection