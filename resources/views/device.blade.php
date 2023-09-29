@extends('layouts.side-navbar')
 
@section('content')

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h2 class="title">
      Device Page
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

    <section class="section main-section">
    <div class="notification blue">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="mdi mdi-buffer"></i></span>
          <b>Responsive table</b>
        </div>
        <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
      </div>
    </div>
    
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Clients
        </p>
        <a href="#" class="card-header-icon">
          <button class="button small green --jb-modal" data-target="data-form-clien" type="button">
            <span class="icon"><i class="mdi  mdi-plus"></i></span>
          </button>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th class="number-cell">
              <label class="checkbox">
                <span>No.</span>
              </label>
            </th>
            <th class="image-cell"></th>
            <th>Name</th>
            <th>Note</th>
            <th>Division</th>
            <th>Status</th>
            <th>Timestamp</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="sample-number">
                <span>1.</span>
            </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Rebecca Bauch</td>
            <td data-label="Note">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, illum!</td>
            <td data-label="Division">TL-01</td>
            <td data-label="Status">Complete</td>
            <td data-label="Timestamp">
              <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>2.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/felicita-yundt.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Felicita Yundt</td>
            <td data-label="Note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, esse.</td>
            <td data-label="Division">TL-01</td>
            <td data-label="Status"> Complete  </td>
            <td data-label="Timestamp">
              <small class="text-gray-500" title="Jan 8, 2021">Jan 8, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>3.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/mr-larry-satterfield-v.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Mr. Larry Satterfield V</td>
            <td data-label="Note">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse, cumque!</td>
            <td data-label="Division">TN-01</td>
            <td data-label="Status"> Complete </td>
            <td data-label="Timestamp">
              <small class="text-gray-500" title="Dec 18, 2021">Dec 18, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>4.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/mr-broderick-kub.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Mr. Broderick Kub</td>
            <td data-label="Note">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, rerum!</td>
            <td data-label="Division">TE-02</td>
            <td data-label="Status"> Active</td>
            <td data-label="Timestamp">
              <small class="text-gray-500" title="Sep 13, 2021">Sep 13, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="sample-number">
              <span>5.</span>
          </td>
            <td class="image-cell">
              <div class="image">
                <img src="https://avatars.dicebear.com/v2/initials/barry-weber.svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Barry Weber</td>
            <td data-label="Note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, nemo.</td>
            <td data-label="Division">TN-02</td>
            <td data-label="Status"> Active</td>
            <td data-label="Timestamp">
              <small class="text-gray-500" title="Jul 24, 2021">Jul 24, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small blue --jb-modal"  data-target="modal-edit" type="button">
                  <span class="icon"><i class="mdi mdi-pencil"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="modal-delete" type="button">
                  <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          </tbody>
        </table>

        <div class="table-pagination">
          <div class="flex items-center justify-between">
            <div class="buttons">
              <button type="button" class="button active">1</button>
              <button type="button" class="button">2</button>
              <button type="button" class="button">3</button>
            </div>
            <small>Page 1 of 3</small>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- <div class="bg-[#F8F8F8] h-screen">
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
    </div> -->
@endsection