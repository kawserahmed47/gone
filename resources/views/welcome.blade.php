<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="{{asset('css/common.css')}}" crossorigin="anonymous">

  <!-- generated tailwind css -->
  @vite('resources/css/app.css')


  <title>Beel</title>
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden" x-data="{ toggleSidebar: true }">

    <!-- header -->
  <header class="shadow-lg relative z-10">
    <div class="w-full text-gray-700 bg-white   ">
      <div x-data="{ open: false }" class="flex flex-col px-4 md:items-center md:justify-between md:flex-row">
        <div class="p-4 flex flex-row items-center justify-between">
          <div class="flex items-center gap-4">
            <button @click="toggleSidebar = !toggleSidebar" class="flex">
              <i class="text-2xl fa-solid fa-bars"></i>
            </button>
            <a href="#" class="text-lg md:text-2xl font-semibold tracking-widest text-gray-900 uppercase rounded-lg  focus:outline-none focus:shadow-outline">BEEL</a>
          </div>
          <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="text-gray-500 flex gap-4 flex-row items-center relative w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg      md:w-auto md:inline md:mt-0 md:ml-4 ">
              <i class="text-xl fa-regular fa-message"></i>
              <span class="md:hidden">Messages</span>
              <span class="text-xs absolute -top-1 right-0">0</span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
              <div class="px-2 py-2 bg-white rounded-md shadow  ">
                <p>Anything here</p>
              </div>
            </div>
          </div>
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="text-gray-500 flex gap-4 flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg      md:w-auto md:inline md:mt-0 md:ml-4 ">
              <i class="text-xl fa-solid fa-cart-arrow-down"></i>
              <span class="md:hidden">Cart</span>
              <span class="text-xs absolute -top-1 right-0">0</span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
              <div class="px-2 py-2 bg-white rounded-md shadow  ">
                <p>Anything here</p>
              </div>
            </div>
          </div>
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="text-gray-500 flex gap-4 flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg      md:w-auto md:inline md:mt-0 md:ml-4 ">
              <i class="text-xl fa-regular fa-bell"></i>
              <span class="md:hidden">Notifications</span>
              <span class="text-xs absolute -top-1 right-0">0</span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
              <div class="px-2 py-2 bg-white rounded-md shadow  ">
                <p>Anything here</p>
              </div>
            </div>
          </div>
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="text-gray-500 flex gap-4 flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg      md:w-auto md:inline md:mt-0 md:ml-4 ">
              <i class="text-xl fa-regular fa-folder-open"></i>
              <span class="md:hidden">Orders</span>
              <span class="text-xs absolute -top-1 right-0">0</span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
              <div class="px-2 py-2 bg-white rounded-md shadow  ">
                <p>Anything here</p>
              </div>
            </div>
          </div>
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="text-gray-500 flex gap-4 flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg      md:w-auto md:inline md:mt-0 md:ml-4 ">
              <i class="text-xl fa-regular fa-user"></i>
              <span class="md:hidden">Me</span>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-10">
              <div class="px-2 py-2 bg-white rounded-md shadow  ">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:bg-gray-200" href="#">
                  Link #1
                </a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:bg-gray-200" href="#">
                  Link #2
                </a>
                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:bg-gray-200" href="#">
                  Link #3
                </a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- body -->
  <div class="flex-1 flex">
    <!-- sidebar -->
    <nav :class="{'-ml-72 md:ml-0': toggleSidebar, 'ml-0 md:-ml-72': !toggleSidebar}" class="bg-white relative py-4 text-gray-700 font-medium transition-all -ml-72 md:ml-0" style="min-width: 18rem; max-width: 18rem;">
      <ul>
        <li>
          <a href="#!" class="w-full flex gap-4 items-center justify-between px-8 py-2 hover:bg-blue-600 hover:text-white transition-all duration-200 cursor-pointer bg-gray-200">
            <div class="flex items-center gap-3">
              <i class="fa-solid fa-house text-sm"></i>
              <p>Dashboard</p>
            </div>
          </a>
        </li>
        <li x-data="{ open: false }">
          <button @click="open = !open" class="w-full flex gap-4 items-center justify-between px-8 py-2 hover:bg-blue-600 hover:text-white transition-all duration-200 cursor-pointer">
            <div class="flex items-center gap-3">
              <i class="fa-solid fa-arrow-up-1-9 text-sm"></i>
              <p>Orders</p>
            </div>
            <div :class="{'rotate-90': open, 'rotate-0': !open}">
              <i class="fa-solid fa-angles-right text-sm"></i>
            </div>
          </button>
          <div x-show="open">
            <a href="#!" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
              All Orders
            </a>
            <a href="#!" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
              Pending Orders
            </a>
            <a href="#!" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
              Processing Orders
            </a>
          </div>
        </li>
        <li x-data="{ open: false }">
          <button @click="open = !open" class="w-full flex gap-4 items-center justify-between px-8 py-2 hover:bg-blue-600 hover:text-white transition-all duration-200 cursor-pointer">
            <div class="flex items-center gap-3">
              <i class="fa-solid fa-flag text-sm"></i>
              <p>Manage Country</p>
            </div>
            <div :class="{'rotate-90': open, 'rotate-0': !open}">
              <i class="fa-solid fa-angles-right text-sm"></i>
            </div>
          </button>
          <div x-show="open">
            <a href="#!" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
              Country
            </a>
            <a href="#!" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
              Manage Tax
            </a>
          </div>
        </li>
      </ul>
    </nav>

    <!-- main body -->
    <main class="w-full min-w-full md:min-w-0 p-4 bg-gray-100 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4" style="overflow: unset;">
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
      <div class="bg-gray-400 h-96"></div>
    </main>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- alpine js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>