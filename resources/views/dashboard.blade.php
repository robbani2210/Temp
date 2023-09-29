@extends('layouts.side-navbar')

@section('content')

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h2 class="title">
      Dashboard Page
    </h2>
  </div>
</section>

<section class="section main-section">
    <div class="flex gap-6 grid-cols-1 md:grid-cols-3 mb-6">
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Device 1
                        </h3>
                        <p>
                            High Temp<br>
                            Status 1: 80°C<br>
                            Status 2: 87°C<br>
                            Status 3: 93°C<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Device 2
                        </h3>
                        <p>
                            Normal<br>
                            Status 1: 80°C<br>
                            Status 2: 87°C<br>
                            Status 3: 93°C<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Device 3
                        </h3>
                        <p>
                            Normal<br>
                            Status 1: 80°C<br>
                            Status 2: 87°C<br>
                            Status 3: 93°C<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Device 4
                        </h3>
                        <p>
                            High Temp<br>
                            Status 1: 80°C<br>
                            Status 2: 87°C<br>
                            Status 3: 93°C<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Device 5
                        </h3>
                        <p>
                            High Temp<br>
                            Status 1: 80°C<br>
                            Status 2: 87°C<br>
                            Status 3: 93°C<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Device 6
                        </h3>
                        <p>
                            Normal<br>
                            Status 1: 80°C<br>
                            Status 2: 87°C<br>
                            Status 3: 93°C<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>




    </div>

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

    <div class="notification blue">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
            <div>
                <span class="icon"><i class="mdi mdi-buffer"></i></span>
                <b>Responsive table</b>
            </div>
            <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
        </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- <div class="bg-[#F8F8F8] h-screen">
        <div class="flex justify-between items-center py-4 px-6 bg-white border border-gray-200 rounded-lg shadow m-6 md:mx-10">
            <h1 class="md:text-xl text-[#625F6E]">Dashboard</h1>
            <div class="space-x-4">
                <i class="ph-light ph-chat-circle text-xl md:text-3xl text-[#625F6E]"></i>
                <i class="ph-light ph-user-circle text-xl md:text-3xl text-[#625F6E]"></i>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 m-6 md:mx-10">
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
                    <i class="ph-bold ph-warning-circle text-2xl text-[#E02424]"></i>
                </a>
                <h2 class="text-[#625F6E] text-3xl xl:text-4xl text-center font-light mt-4">High Voltage</h2>
                <ul class="text-[#625F6E] text-center pt-6">
                    <li>Status 1: 80°C</li>
                    <li>Status 2: 87°C</li>
                    <li>Status 3: 93°C</li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-6 md:mx-10">
            <div class="bg-white border border-gray-200 rounded-lg shadow md:mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Statistics 1</h1>
                <img src="{{ asset('img/image 1.png') }}" class="mt-8" />
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow mb-8 p-6">
                <h1 class="text-lg text-[#625F6E]">Statistics 2</h1>
                <img src="{{ asset('img/image 2.png') }}" class="mt-8" />
            </div>
        </div>
    </div> -->
    @endsection