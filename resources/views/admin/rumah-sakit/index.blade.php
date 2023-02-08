@extends('admin.layout.layout')
@section('content')


@if(session()->has('success'))
<div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
    <span class="font-medium">{{ session('seccess') }}</span>
</div>
@endif



<a href="rumah-sakit/create">
    <button type="button"
        class="text-white my-5 mx-10  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Tambah Rumah Sakit
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
            <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path>
        </svg>
    </button>
</a>
<div class=" mx-10 mt-5 overflow-x-auto relative shadow-md sm:rounded-lg">


    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nama Rumah Sakit
                </th>
                <th scope="col" class="py-3 px-6">
                    Alamat
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            @if($rumahsakits->count())
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $rumahsakits[0]->nama_rs }}
                </th>
                <td class="py-4 px-6">
                    {{ $rumahsakits[0]->alamat }}
                </td>
                <td class="py-4 px-6">
                    <div class="flex">
                        <a href="rumah-sakit/{{ $rumahsakits[0]->id }} ">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z">
                                    </path>
                                    <path
                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                    </path>
                                </svg>

                            </span>

                        </a>

                        <a href="rumah-sakit/{{ $rumahsakits[0]->id }}/edit " class="mx-2">
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

                            </span>

                        </a>


                        <form action="{{ route('rumah-sakit.destroy',$rumahsakits[0]->id) }}" method="POST">
                            @method('delete')
                            @csrf


                            <button id="delete" type="button" onclick="deleteArtikel({{  $rumahsakits[0]->id }})"><span
                                    class="bg-blue-100 text-blue-800 delete text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path
                                            d="M20 2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3v3.767L13.277 18H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14h-7.277L9 18.233V16H4V4h16v12z">
                                        </path>
                                        <path
                                            d="M9.707 13.707 12 11.414l2.293 2.293 1.414-1.414L13.414 10l2.293-2.293-1.414-1.414L12 8.586 9.707 6.293 8.293 7.707 10.586 10l-2.293 2.293z">
                                        </path>
                                    </svg>

                                </span></button>
                        </form>

                    </div>



                </td>
            </tr>

            @foreach($rumahsakits->skip(1) as $rumahsakit)

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $rumahsakit->nama_rs }}
                </th>
                <td class="py-4 px-6">
                    {{ $rumahsakit->alamat }}
                </td>
                <td class="py-4 px-6">
                    <div class="flex">
                        <a href="rumah-sakit/{{ $rumahsakit->id }} ">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z">
                                    </path>
                                    <path
                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                    </path>
                                </svg>

                            </span>

                        </a>

                        <a href="rumah-sakit/{{ $rumahsakit->id }}/edit " class="mx-2">
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

                            </span>

                        </a>

                        <form action="{{ route('rumah-sakit.destroy',$rumahsakit->id) }}" method="POST">
                            @method('delete')
                            @csrf


                            <button id="delete" type="button" onclick="deleteArtikel({{  $rumahsakit->id }})"><span
                                    class="bg-blue-100 text-blue-800 delete text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                        <path
                                            d="M20 2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3v3.767L13.277 18H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14h-7.277L9 18.233V16H4V4h16v12z">
                                        </path>
                                        <path
                                            d="M9.707 13.707 12 11.414l2.293 2.293 1.414-1.414L13.414 10l2.293-2.293-1.414-1.414L12 8.586 9.707 6.293 8.293 7.707 10.586 10l-2.293 2.293z">
                                        </path>
                                    </svg>

                                </span></button>
                        </form>

                        {{-- <a href="admin-artikel/{{ $post->id }}">


                        </a> --}}

                    </div>



                </td>
            </tr>
            @endforeach



        </tbody>


    </table>

</div>



<div class="mx-10 mt-5">
    {{ $rumahsakits->links() }}

</div>



@else

<p class="text-2xl text-center">Tidak ada Artikel yang anda cari </p>

@endif





<script>
    function deleteArtikel(id){
        console.log(id);
        swal({
            title: "Apakah Anda yakin?",
            text: "Setelah dihapus, Anda tidak akan dapat memulihkan file imajiner ini!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            
            if (willDelete) {
                
                $.ajax({
                    url: '/rumah-sakit/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                       
                        swal("Bsehasil! Artikel telah berhasil dihapus!", {
                            icon: "success",
                        });
                        window.location.href = '/rumah-sakit';
                    }
                });

                
                
                
            } else {
                swal("Your imaginary file is safe!");
            }
        });
    }
    
    // $('.delete').click(function (){
        
        //     swal({
            //         title: "Are you sure?",
            //         text: "Once deleted, you will not be able to recover this imaginary file!",
            //         icon: "warning",
            //         buttons: true,
            //         dangerMode: true,
            //     })
            //     .then((willDelete) => {
                //         console.log(willDelete);
                //         if (willDelete) {
                    
                    
                    //             document.getElementById('delete').click();
                    
                    //             swal("Poof! Your imaginary file has been deleted!", {
                        //                 icon: "success",
                        //             });
                        //         } else {
                            //             swal("Your imaginary file is safe!");
                            //         }
                            //     });
                            
                            // })
                            
</script>


@endsection