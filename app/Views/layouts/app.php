<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body style="background-color:#1E293B">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CDN pour Flyoon UI -->
  <link href="https://cdn.jsdelivr.net/npm/flyoon-ui@latest/dist/flyoon.min.css" rel="stylesheet">
  <!-- CDN pour ApexCharts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.39.0"></script>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

  <style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

  html {
    font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  }
  </style>




  <nav class="fixed top-0 z-50 w-full ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button"
            class="inline-flex items-center p-2 text-sm text-gray-400 rounded-lg sm:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
              </path>
            </svg>
          </button>
          <a href="https://flowbite.com" class="flex ms-2 md:me-24">
             <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Real Estate CRM</span>
          </a>
        </div>
        <div class="flex items-center">
          <div class="flex items-center ms-3">
            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-600"
              aria-expanded="false" data-dropdown-toggle="dropdown-user">
              <span class="sr-only">Open user menu</span>


              <i class="fa-solid fa-user text-white text-2xl bg-gray-400 p-3 rounded-full"></i>
            </button>
            <div class="z-50 hidden my-4 text-base list-none bg-gray-700 divide-y divide-gray-600 rounded shadow"
              id="dropdown-user">
              <div class="px-4 py-3">
                <p class="text-sm text-white">Neil Sims</p>
                <p class="text-sm font-medium truncate text-gray-300">neil.sims@flowbite.com</p>
              </div>
              <ul class="py-1">
                <li><a href="#"
                    class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-600 hover:text-white">Dashboard</a></li>
                <li><a href="#"
                    class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-600 hover:text-white">Settings</a></li>
                <li><a href="#"
                    class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-600 hover:text-white">Earnings</a></li>
                <li><a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-600 hover:text-white">Sign
                    out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-800  sm:translate-x-0 border-r"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
        <li>
          <a href="/dashboard" class="flex items-center p-2  rounded-lg text-white bg-gray-500 hover:bg-gray-700 group">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>

            <span class="ms-3">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/clients" class="flex items-center p-2  rounded-lg text-white bg-gray-800 hover:bg-gray-700 group">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
            </svg>

            <span class="ms-3">Client</span>
          </a>
        </li>

        <!-- ----------------------------------produits---------------------------------- -->
        <li>
          <a href="/clients" class="flex items-center p-2  rounded-lg text-white bg-gray-800 hover:bg-gray-700 group">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
            </svg>
            <span class="ms-3">Produits</span>
          </a>
        </li>
        <!-- -----------------------------------transaction-------------------------------- -->


        <li>
          <a href="/transactions"
            class="flex items-center p-2  rounded-lg text-white bg-gray-800 hover:bg-gray-700 group">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
            </svg>
            <span class="ms-3">Trasactions</span>
          </a>
        </li>

    </div>
  </aside>

  <main <div class="p-4 sm:ml-64 mt-14 ">
    <?= $this->renderSection('content') ?>
    </div>
    <!---------------------------- footer------------------------- -->


    
  


  

</main>

</body>
</html>