@extends('layouts.base')
 
@section('title', 'Dashboard')
 
@section('content')
    <div class="bg-[#F8F8F8] h-screen">
        <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-12">
            <h1 class="md:text-xl text-[#625F6E]">Dashboard</h1>
            <div class="space-x-4">
                <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
                <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-8 m-6 md:mx-12">
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mt-8">
                <a href="#" class="flex justify-between items-center">
                    <h1 class="text-lg text-[#625F6E]">Device 1</h1>
                    <i class="ph-bold ph-warning-circle text-2xl text-[#E02424]"></i>
                </a>
                <h2 class="text-[#625F6E] text-3xl xl:text-4xl text-center font-light mt-4">High Temp</h2>
                <ul class="text-[#625F6E] text-center pt-6">
                    <li>Status 1: 80°C</li>
                    <li>Status 2: 87°C</li>
                    <li>Status 3: 93°C</li>
                </ul>
            </div>
    
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow md:mt-8">
                <a href="#" class="flex justify-between items-center">
                    <h1 class="text-lg text-[#625F6E]">Device 2</h1>
                    <i class="ph-bold ph-warning-circle text-2xl text-[#E02424] hidden"></i>
                </a>
                <h2 class="text-[#625F6E] text-3xl xl:text-4xl text-center font-light mt-4">Normal</h2>
                <ul class="text-[#625F6E] text-center pt-6">
                    <li>Status 1: 80°C</li>
                    <li>Status 2: 87°C</li>
                    <li>Status 3: 93°C</li>
                </ul>
            </div>

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow lg:mt-8">
                <a href="#" class="flex justify-between items-center">
                    <h1 class="text-lg text-[#625F6E]">Device 3</h1>
                    <i class="ph-bold ph-warning-circle text-2xl text-[#E02424] hidden"></i>
                </a>
                <h2 class="text-[#625F6E] text-3xl xl:text-4xl text-center font-light mt-4">Normal</h2>
                <ul class="text-[#625F6E] text-center pt-6">
                    <li>Status 1: 80°C</li>
                    <li>Status 2: 87°C</li>
                    <li>Status 3: 93°C</li>
                </ul>
            </div>

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow lg:mt-8">
                <a href="#" class="flex justify-between items-center">
                    <h1 class="text-lg text-[#625F6E]">Device 4</h1>
                    <i class="ph-bold ph-warning-circle  text-[#E02424]"></i>
                </a>
                <h2 class="text-[#625F6E] text-3xl xl:text-4xl text-center font-light mt-4">High Voltage</h2>
                <ul class="text-[#625F6E] text-center pt-6">
                    <li>Status 1: 80°C</li>
                    <li>Status 2: 87°C</li>
                    <li>Status 3: 93°C</li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 m-6 md:mx-12">
            <div class="bg-white border border-gray-200 rounded-lg shadow md:mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Statistics 1</h1>
                <img src="{{ asset('img/image 1.png') }}" class="mt-8" />
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Statistics 2</h1>
                <img src="{{ asset('img/image 2.png') }}" class="mt-8" />
            </div>
        </div>
    </div>
@endsection