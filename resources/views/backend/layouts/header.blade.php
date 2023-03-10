<header class="shadow-lg relative z-10">
    <div class="w-full text-gray-700 bg-white   ">
      <div x-data="{ open: false }" class="flex flex-col px-4 md:items-center md:justify-between md:flex-row">
        <div class="p-4 flex flex-row items-center justify-between">
          <div class="flex items-center gap-4">
            <button @click="toggleSidebar = !toggleSidebar" class="flex">
              <i class="text-2xl fa-solid fa-bars"></i>
            </button>
            <a href="#" class="text-lg md:text-2xl font-semibold tracking-widest text-gray-900 uppercase rounded-lg  focus:outline-none focus:shadow-outline">GONE</a>
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