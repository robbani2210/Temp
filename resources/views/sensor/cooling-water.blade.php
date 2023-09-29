@extends('layouts.side-navbar')
 
@section('content')

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h2 class="title">
      Sensor > Temperature Cooling Water
    </h2>
  </div>
</section>


<div class="card mb-6">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-finance"></i></span>
                Temperature
            </p>
            <a href="#" class="card-header-icon">
                <span class="icon"><i class="mdi mdi-reload"></i></span>
            </a>
        </header>
        <div class="card-content">
            <div class="chart-area">
                <div class="h-full">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div></div>
                        </div>
                    </div>
                    <canvas id="big-line-chart" width="2992" height="1000" class="chartjs-render-monitor block" style="height: 400px; width: 1197px;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="bg-[#F8F8F8] h-screen">
        <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-12">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center md:text-xl text-[#625F6E] hover:text-blue-600">
                        Sensor
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="#" class="ml-1 md:text-xl text-[#625F6E] hover:text-blue-600 md:ml-2">Temperature Cooling Water</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="space-x-4">
                <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
                <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
            </div>
        </div> -->

        
    </div>
@endsection