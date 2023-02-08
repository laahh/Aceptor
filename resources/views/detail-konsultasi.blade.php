@extends('user.layout.layout')
@section('content')

<nav class="flex flex-col w-full max-w-xs h-screen pb-5 overflow-y-auto bg-gray-600">
    <div class="px-5">
        <div
            class="flex items-center mt-5 p-2.5 rounded-lg border-2 border-[#3c3c3c] cursor-pointer transition bg-[#14131b] hover:border-white">
            <img class="w-10 h-10 rounded-full"
                src="https://images.unsplash.com/photo-1556763129-f399a3f3d680?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=100&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTYyNjg5MjEwMQ&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=100">
            <div class="mx-3 overflow-hidden">
                <p class="font-medium leading-tight truncate text-white">John Doe</p>
                <p class="text-xs leading-tight truncate text-[#808080]">johndoe@example.com</p>
            </div>
            <svg class="flex-shrink-0 ml-auto w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>
        <button
            class="flex items-center justify-center w-full mt-5 p-3 rounded-lg font-medium text-white bg-blue-600 transition hover:bg-blue-700 focus:outline-none">
            <svg class="w-6 h-6 mr-3 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 16 16">
                <path
                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd"
                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg>
            New Message
        </button>
    </div>
    <div class="mt-5 space-y-3">
        <a href="#"
            class="flex items-center py-3 pl-[17px] border-l-[3px] border-white font-medium text-white bg-[#14131b]">
            <svg class="w-6 h-6 mr-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z" />
            </svg>
            Inbox
            <span class="flex items-center ml-auto mr-5 px-1 rounded text-[12px] bg-blue-600">185</span>
        </a>
        <a href="#"
            class="flex items-center py-3 pl-[17px] border-l-[3px] border-transparent font-medium transition-all text-[#808080] hover:pl-6 hover:border-white hover:text-white hover:bg-[#14131b]">
            <svg class="w-6 h-6 mr-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
            </svg>
            Starred
        </a>
        <a href="#"
            class="flex items-center py-3 pl-[17px] border-l-[3px] border-transparent font-medium transition-all text-[#808080] hover:pl-6 hover:border-white hover:text-white hover:bg-[#14131b]">
            <svg class="w-6 h-6 mr-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
            </svg>
            Snoozed
        </a>
        <a href="#"
            class="flex items-center py-3 pl-[17px] border-l-[3px] border-transparent font-medium transition-all text-[#808080] hover:pl-6 hover:border-white hover:text-white hover:bg-[#14131b]">
            <svg class="w-6 h-6 mr-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z" />
            </svg>
            Sent
        </a>
        <a href="#"
            class="flex items-center py-3 pl-[17px] border-l-[3px] border-transparent font-medium transition-all text-[#808080] hover:pl-6 hover:border-white hover:text-white hover:bg-[#14131b]">
            <svg class="w-6 h-6 mr-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
            </svg>
            Drafts
        </a>
        <a href="#"
            class="flex items-center py-3 pl-[17px] border-l-[3px] border-transparent font-medium transition-all text-[#808080] hover:pl-6 hover:border-white hover:text-white hover:bg-[#14131b]">
            <svg class="w-6 h-6 mr-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
            </svg>
            Spam
        </a>
        <a href="#"
            class="flex items-center py-3 pl-[17px] border-l-[3px] border-transparent font-medium transition-all text-[#808080] hover:pl-6 hover:border-white hover:text-white hover:bg-[#14131b]">
            <svg class="w-6 h-6 mr-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd"
                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
            </svg>
            Bin
        </a>
    </div>
    <div class="px-5">
        <hr class="mt-5 border-[#3c3c3c]">
        <div class="mt-5 space-y-3">
            <p class="flex items-center justify-between font-medium text-[#808080]">
                Folders
                <svg class="w-4 h-4 cursor-pointer hover:text-white" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path
                        d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
                </svg>
            </p>
            <a href="#" class="flex items-center font-medium text-[#808080] transition-colors group hover:text-white">
                <span
                    class="w-3 h-3 mr-5 rounded-full border-2 border-blue-600 transition-colors group-hover:bg-blue-600"></span>
                Work
            </a>
            <a href="#" class="flex items-center font-medium text-[#808080] transition-colors group hover:text-white">
                <span
                    class="w-3 h-3 mr-5 rounded-full border-2 border-yellow-600 transition-colors group-hover:bg-yellow-600"></span>
                Personal
            </a>
            <a href="#" class="flex items-center font-medium text-[#808080] transition-colors group hover:text-white">
                <span
                    class="w-3 h-3 mr-5 rounded-full border-2 border-red-600 transition-colors group-hover:bg-red-600"></span>
                School
            </a>
        </div>
        <hr class="mt-5 border-[#3c3c3c]">
    </div>
    <div class="mt-auto px-5">
        <div class="mt-5">
            <p class="font-medium text-white">15.35 GB <span class="text-sm text-[#808080]">used</span></p>
            <p class="text-sm font-medium text-[#808080]">76% Used - 4.65 GB Free</p>
            <div class="w-full h-2 mt-2 rounded-lg bg-[#3c3c3c]">
                <div class="w-[76%] h-full rounded-xl bg-blue-600"></div>
            </div>
        </div>
    </div>
</nav>

@endsection