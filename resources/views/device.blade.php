@extends('layouts.base')
 
@section('title', 'Device')
 
@section('content')
    <div class="bg-[#F8F8F8] h-screen">
        <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-12">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center md:text-xl text-[#625F6E] hover:text-blue-600">
                        Device
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="#" class="ml-1 md:text-xl text-[#625F6E] hover:text-blue-600 md:ml-2">Device 1</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="space-x-4">
                <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
                <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
            </div>
        </div>

        <div class="py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-12">
            <h1 class="text-2xl mt-2 mb-4 text-[#625F6E]">Note</h1>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-center text-gray-700 uppercase bg-gray-200">
                    <tr>
                        <th scope="col" class="py-4">
                            Timestamp
                        </th>
                        <th scope="col" class="py-4">
                            Name
                        </th>
                        <th scope="col" class="py-4">
                            Note
                        </th>
                        <th scope="col" class="py-4">
                            Status
                        </th>
                        <th scope="col" class="py-4">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-3 px-2">
                            Apple MacBook Pro 17"
                        </td>
                        <td class="py-3 px-2">
                            Silver
                        </td>
                        <th scope="row" class="py-3 px-2 font-medium text-gray-900 whitespace-nowrap">
                            Laptop
                        </td>
                        <td class="bg-[#28A745] text-white pl-3">
                            Complete
                        </td>
                        <td class="py-3 px-2 flex justify-evenly">
                            <i class="ph-bold ph-pencil-simple font-medium text-lg text-blue-600 hover:underline"></i>
                            <i class="ph-bold ph-trash font-medium text-lg text-red-600 hover:underline"></i>
                        </td>
                    </tr>

                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-3 px-2">
                            Apple MacBook Pro 17"
                        </td>
                        <td class="py-3 px-2">
                            Silver
                        </td>
                        <th scope="row" class="py-3 px-2 font-medium text-gray-900 whitespace-nowrap">
                            Laptop
                        </td>
                        <td class="pl-3">
                            Complete
                        </td>
                        <td class="py-3 px-2 flex justify-evenly">
                            <i class="ph-bold ph-pencil-simple font-medium text-lg text-blue-600 hover:underline"></i>
                            <i class="ph-bold ph-trash font-medium text-lg text-red-600 hover:underline"></i>
                        </td>
                    </tr>
                    
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-3 px-2">
                            Apple MacBook Pro 17"
                        </td>
                        <td class="py-3 px-2">
                            Silver
                        </td>
                        <th scope="row" class="py-3 px-2 font-medium text-gray-900 whitespace-nowrap">
                            Laptop
                        </td>
                        <td class="pl-3">
                            Complete
                        </td>
                        <td class="py-3 px-2 flex justify-evenly">
                            <i class="ph-bold ph-pencil-simple font-medium text-lg text-blue-600 hover:underline"></i>
                            <i class="ph-bold ph-trash font-medium text-lg text-red-600 hover:underline"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav class="flex justify-between items-center mt-4" aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                <ul class="inline-flex -space-x-px text-sm h-8">
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 md:mx-12">
            <div class="bg-white border border-gray-200 rounded-lg shadow p-6">
                <h1 class="text-lg text-[#625F6E]">Sensor 1</h1>
                <img src="{{ asset('img/image 1.png') }}" class="mt-8" />
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow p-6">
                <h1 class="text-lg text-[#625F6E]">Sensor 2</h1>
                <img src="{{ asset('img/image 2.png') }}" class="mt-8" />
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 md:mx-12">
            <div class="bg-white border border-gray-200 rounded-lg shadow md:mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Sensor 3</h1>
                <img src="{{ asset('img/image 1.png') }}" class="mt-8" />
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Sensor 4</h1>
                <img src="{{ asset('img/image 2.png') }}" class="mt-8" />
            </div>
        </div>
    </div>
@endsection