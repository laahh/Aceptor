@extends('user.layout.layout')
@section('content')


<div class="grid grid-cols-6 gap-4">
    <div class="col-start-1 col-end-3">
        <h1 class="mx-10 my-5 font-Poppins">Artikel </h1>
    </div>
    <div class="col-end-7 col-span-2 mt-10">
        @role('dokter')

        <button
            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button" data-modal-toggle="medium-modal-1">
            + Create Artikel
        </button>

        @endrole
    </div>

</div>




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
                <form method="POST" action="/artikel" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="tittel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Title</label>
                            <input type="text" id="tittel"
                                class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                required autofocus name="tittel">

                        </div>
                        <div>
                            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Slug</label>
                            <input type="text" id="slug"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required name="slug">
                        </div>
                        <div>
                            <label for="excerpt"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Excerpt</label>
                            <input type="text" id="excerpt"
                                class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required name="excerpt">
                        </div>

                        <div>
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                Category</label>
                            <select id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="category_id">
                                <option selected>Choose a Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>

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
                    <div class="">
                        <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi
                        </label>
                        <textarea type="text" id="body" name="body" value="{{ old('isi') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Pengertian " required> {{ get_meta_value('isi') }} </textarea>
                    </div>
                    {{-- <div>
                        <label for="body"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">body</label>
                        <input id="body" type="hidden" name="body" required>
                        <trix-editor input="body"></trix-editor>

                    </div> --}}




                    <button type="submit" onclick="swal('Good job!', 'Artikel Berhasil Dibuat!', 'success')"
                        class="mt-5 create inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Publish post
                    </button>









                </form>
            </div>
        </div>
    </div>
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


<div class="mx-5 grid grid-cols-1 sm:grid-cols-1 gap-6 md:grid-cols-3 lg:grid-cols-3 mt-10 mb-10">
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




<div class="mx-10">
    {{ $posts->links() }}

</div>



@else

<p class="text-2xl text-center">Tidak ada Artikel yang anda cari </p>

@endif

<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>





<script>
    class MyUploadAdapter {
    constructor( loader ) {
        // The file loader instance to use during the upload.
        this.loader = loader;
    }

    // Starts the upload process.
    upload() {
        return this.loader.file
            .then( file => new Promise( ( resolve, reject ) => {
                this._initRequest();
                this._initListeners( resolve, reject, file );
                this._sendRequest( file );
            } ) );
    }

    // Aborts the upload process.
    abort() {
        if ( this.xhr ) {
            this.xhr.abort();
        }
    }

    // Initializes the XMLHttpRequest object using the URL passed to the constructor.
    _initRequest() {
        const xhr = this.xhr = new XMLHttpRequest();

        // Note that your request may look different. It is up to you and your editor
        // integration to choose the right communication channel. This example uses
        // a POST request with JSON as a data structure but your configuration
        // could be different.
        xhr.open( 'POST', '{{ route('ckeditor.upload') }}', true );
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
        xhr.responseType = 'json';
    }

    // Initializes XMLHttpRequest listeners.
    _initListeners( resolve, reject, file ) {
        const xhr = this.xhr;
        const loader = this.loader;
        const genericErrorText = `Couldn't upload file: ${ file.name }.`;

        xhr.addEventListener( 'error', () => reject( genericErrorText ) );
        xhr.addEventListener( 'abort', () => reject() );
        xhr.addEventListener( 'load', () => {
            const response = xhr.response;

            // This example assumes the XHR server's "response" object will come with
            // an "error" which has its own "message" that can be passed to reject()
            // in the upload promise.
            //
            // Your integration may handle upload errors in a different way so make sure
            // it is done properly. The reject() function must be called when the upload fails.
            if ( !response || response.error ) {
                return reject( response && response.error ? response.error.message : genericErrorText );
            }

            // If the upload is successful, resolve the upload promise with an object containing
            // at least the "default" URL, pointing to the image on the server.
            // This URL will be used to display the image in the content. Learn more in the
            // UploadAdapter#upload documentation.
            resolve( {
                default: response.url
            } );
        } );

        // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
        // properties which are used e.g. to display the upload progress bar in the editor
        // user interface.
        if ( xhr.upload ) {
            xhr.upload.addEventListener( 'progress', evt => {
                if ( evt.lengthComputable ) {
                    loader.uploadTotal = evt.total;
                    loader.uploaded = evt.loaded;
                }
            } );
        }
    }

    // Prepares the data and sends the request.
    _sendRequest( file ) {
        // Prepare the form data.
        const data = new FormData();

        data.append( 'upload', file );

        // Important note: This is the right place to implement security mechanisms
        // like authentication and CSRF protection. For instance, you can use
        // XMLHttpRequest.setRequestHeader() to set the request headers containing
        // the CSRF token generated earlier by your application.

        // Send the request.
        this.xhr.send( data );
    }
}

// ...

function MyCustomUploadAdapterPlugin( editor ) {
    editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
        // Configure the URL to the upload script in your back-end here!
        return new MyUploadAdapter( loader );
    };
}

// ...

ClassicEditor
    .create( document.querySelector( '#body' ), {
        extraPlugins: [ MyCustomUploadAdapterPlugin ],

        // ...
    } )
    .catch( error => {
        console.log( error );
    } );

</script>

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








@endsection

@push('script')

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
@endpush