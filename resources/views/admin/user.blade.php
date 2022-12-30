@extends('admin.layout.layout')
@section('content')

<div class=" p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">


    <div class="p-10 w-full  ">
        <div class="flex justify-between items-center mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">User Website</h5>
            <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                View all
            </a>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($users as $user)
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="img/profile.jpg" alt="Neil image">
                        </div>
                        <div class="flex-1 ">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                {{ $user->name }}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{ $user->email }}
                            </p>


                        </div>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">User</span>

                    </div>
                </li>

                @endforeach


            </ul>
        </div>
    </div>
</div>







@endsection