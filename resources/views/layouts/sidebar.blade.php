<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-3xl text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
   <span class="sr-only">Open sidebar</span>
   <i class="ph-bold ph-list"></i>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-32 h-screen transition-transform -translate-x-full sm:translate-x-0 drop-shadow-xl" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
      <img src="{{ asset('img/logo unpad x gmf.png') }}" class="h-6 sm:h-7 mx-auto" />
      <ul class="space-y-2 mt-12 mx-6">
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200">
               <span class="ph-light ph-house text-3xl mx-auto"></span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200">
               <span class="ph-light ph-cpu text-3xl mx-auto"></span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200">
               <span class="ph-light ph-monitor text-3xl mx-auto"></span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-200">
               <span class="ph-light ph-question text-3xl mx-auto"></span>
            </a>
         </li>
      </ul>
   </div>
</aside>

