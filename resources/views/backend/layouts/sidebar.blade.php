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
          <a href="{{route('allOrders')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            All Orders
          </a>
          <a href="{{route('pendingOrders')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Pending Orders
          </a>
          <a href="{{route('processingOrders')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Processing Orders
          </a>
          <a href="{{route('completedOrders')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Completed Orders
          </a>
          <a href="{{route('declinedOrders')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Declined Orders
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
          <a href="{{route('manage-country')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Country
          </a>
          <a href="{{route('manage-country.tax')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Manage Tax
          </a>
        </div>
      </li>


      <li x-data="{ open: false }">
        <button @click="open = !open" class="w-full flex gap-4 items-center justify-between px-8 py-2 hover:bg-blue-600 hover:text-white transition-all duration-200 cursor-pointer">
          <div class="flex items-center gap-3">
            <i class="fas fa-hand-holding-usd text-sm"></i>
            <p>Total Earning</p>
          </div>
          <div :class="{'rotate-90': open, 'rotate-0': !open}">
            <i class="fa-solid fa-angles-right text-sm"></i>
          </div>
        </button>

        <div x-show="open">
          <a href="{{route('total-earning.taxCalculate')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Tax Calculate
          </a>

          <a href="{{route('total-earning.subscriptionEarning')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Subscription Earning
          </a>

          <a href="{{route('total-earning.withdrawEarning')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Withdraw Earning
          </a>

          <a href="{{route('total-earning.commissionEarning')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Commission Earning
          </a>

        </div>

      </li>



      <li x-data="{ open: false }">
        <button @click="open = !open" class="w-full flex gap-4 items-center justify-between px-8 py-2 hover:bg-blue-600 hover:text-white transition-all duration-200 cursor-pointer">
          <div class="flex items-center gap-3">
            <i class="fas fa-sitemap text-sm"></i>
            <p>Manage Categories</p>
          </div>
          <div :class="{'rotate-90': open, 'rotate-0': !open}">
            <i class="fa-solid fa-angles-right text-sm"></i>
          </div>
        </button>

        <div x-show="open">
          <a href="{{route('category.mainCategory')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Main Category
          </a>

          <a href="{{route('category.subCategory')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Sub Category
          </a>

          <a href="{{route('category.childCategory')}}" class="flex gap-4 items-center justify-between px-12 py-2 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
            Child Category
          </a>


        </div>

      </li>



    </ul>
  </nav>