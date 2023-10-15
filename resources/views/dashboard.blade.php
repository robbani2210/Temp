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
    <div class="m-6 md:mx-10">
        <h1 class="pt-4 pb-2 px-6 md:text-lg text-[#FFFFFF]">Timestamp: <b>{{ $timestamp }}</b></h1>
        {{-- <div class="flex flex-col md:flex-row justify-around items-center space-y-4 md:space-y-0">
            <button onclick="document.getElementById('SensorList').scrollLeft -= 118"><i class="ph-light ph-caret-left text-3xl text-white"></i></button> --}}
                {{-- <div id="SensorList" class="mt-4 mx-4 grid gap-6 w-full grid-flow-col overflow-auto no-scrollbar py-2"> --}}
                    
                    

                    <div class="overflow-x-auto">
                        <div class="flex">
                            <button id="prevBtn">Previous</button>
                            @foreach ($data as $item)
                                <div class="card mr-4">
                                    <div class="card-content">
                                        <div class="grid items-center justify-between">
                                            <div class="widget-label">
                                                <h3>{{ $item['name'] }}</h3>
                                                <p>{{ $item['value'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <button id="nextBtn">Next</button>
                        </div>
                    </div>
                    
                    
                {{-- </div> --}}
            {{-- <button onclick="document.getElementById('SensorList').scrollLeft += 118"><i class="ph-light ph-caret-right text-3xl text-white"></i></button>
        </div> --}}
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 m-6 md:mx-10">
        <div class="bg-white rounded-lg md:mb-8 p-6">
            <h1 class="text-lg text-[#625F6E]">Device 1</h1>
            <div id="lineChart">
            </div>
        </div>

        <div class="bg-white rounded-lg mb-8 p-6">
            <h1 class="text-lg text-[#625F6E]">Device 2</h1>
            <div id="barChart">
            </div>
        </div>
    </div>
    
    <script>
        var lineChart = {
        chart: {
            height: 350,
            type: "line",
            stacked: false
        },
        dataLabels: {
            enabled: false
        },
        colors: ["#FF1654"],
        series: [
            {
                name: "Value",
                data: {!!json_encode(array_map(function($item) {return $item["value"];}, $data))!!}
            },
        ],
        stroke: {
            curve: "smooth",
            width: 3
        },
        plotOptions: {
            bar: {
                columnWidth: "20%"
            }
        },
        xaxis: {
            categories: {!! json_encode(array_map(function($item) { return $item["name"]; }, $data)) !!}
        },
        yaxis: [
            {
            axisTicks: {
                show: true
            },
            axisBorder: {
                show: true,
                color: "#FF1654"
            },
            labels: {
                style: {
                colors: "#FF1654"
                }
            },
            title: {
                text: "Temperature",
                style: {
                color: "#FF1654"
                }
            }
            }
        ],
        tooltip: {
            shared: false,
            intersect: true,
            x: {
                show: false
            }
        },
        legend: {
            horizontalAlign: "left",
            offsetX: 40
        }
        };

        var barChart = {
            series: [{
                data: {!! json_encode(array_map(function($item) { return $item["value"]; }, $data)) !!}
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
            bar: {
                borderRadius: 4,
                horizontal: true,
            }
            },
                dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: {!! json_encode(array_map(function($item) { return $item["name"]; }, $data)) !!}
            },
        };

        var barChartResult = new ApexCharts(document.querySelector("#barChart"), barChart);
        var lineChartResult = new ApexCharts(document.querySelector("#lineChart"), lineChart);

        barChartResult.render();
        lineChartResult.render();
    </script>

    {{-- <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
        <div class="card">
            <div class="card-content">
                <div class="grid items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Device 1
                        </h3>
                        <p>
                            Normal<br>
                            Temperature: 28.5 °C<br>
                            Humidity: 58 g/kg<br>
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
                            Temperature: 28.5 °C<br>
                            Humidity: 58 g/kg<br>
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
                            Temperature: 28.5 °C<br>
                            Humidity: 58 g/kg<br>
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
                            Normal<br>
                            Temperature: 28.5 °C<br>
                            Humidity: 58 g/kg<br>
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
                            Normal<br>
                            Temperature: 28.5 °C<br>
                            Humidity: 58 g/kg<br>
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
                            Temperature: 28.5 °C<br>
                            Humidity: 58 g/kg<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Device 6
                        </h3>
                        <p>
                            Normal<br>
                            Temperature: 28.5 °C<br>
                            Humidity: 58 g/kg<br>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->




    </div> --}}

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