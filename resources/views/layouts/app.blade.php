<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <title>Star Dough</title>
    @livewireStyles
</head>

<body>
    <nav class="p-6 bg-green-300 flex justify-between mb-6 shadow-lg">
            <ul class="flex items-center gap-3">
                <li class="p-3 border-black border-2 rounded-full transition duration-500 ease-in-out hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110"><a href="{{route('home')}}">Home</a></li>
            </ul>
            <ul class="flex items-center">
   @auth
   @if(auth()->user()->is_admin)
        @auth
        <div class="hidden sm:flex flex-nowrap gap-x-5">
        <a href="{{route('admin')}}" class="p-3 border-black border-2 rounded-full transition duration-500 ease-in-out  hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110">Queue Lists</a>
        <li class="p-3 border-black border-2 rounded-full transition duration-500 ease-in-out  hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110"><a href="{{route('Profile')}}">{{auth()->user()->email}}</a></li>
                <form action="{{route('logout')}}" method="post">
                @csrf
                <li class="p-3 border-black border-2 rounded-full transition duration-500 ease-in-out  hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110"><button type="submit">Logout</button></li>
                </form>
                </div>
                <div class="sm:invisible flex flex-nowrap gap-x-5">
    <div class="flex justify-center">
        <div x-data="{ dropdownOpen: true }" class="relative ">
  <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
    <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
   <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </button>
  <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
  <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
    <a href="{{route('Profile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">
    {{auth()->user()->email}}
    </a>
    <form class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white" action="{{route('logout')}}" method="post">
                @csrf
                <li><button type="submit">Logout</button></li>
                </form>
                <a href="{{route('Profile')}}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                Profile
    </a>
    <a href="{{route('Order.OrderSystem')}}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
    Order
    </a>
        </div>
    </div>
</div>
        @endauth
   @else
                @auth
                <div class="hidden sm:flex flex-nowrap gap-3">
                <li class="p-3 border-black border-2 rounded-full transition duration-500 ease-in-out  hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110"><a href="{{route('Profile')}}">{{auth()->user()->email}}</a></li>
                <form action="{{route('logout')}}" method="post">
                @csrf
                <li class="p-3 border-black border-2 rounded-full transition duration-500 ease-in-out  hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110"><button type="submit">Logout</button></li>
                </form>
                <li class="p-3 border-black border-2 rounded-full transition duration-500 ease-in-out  hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110"><a href="{{route('Order.OrderSystem')}}">Order</a></li>
                </div>
                <div class="sm:invisible flex flex-nowrap gap-x-5">
    <div class="flex justify-center">
        <div x-data="{ dropdownOpen: true }" class="relative ">
  <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
    <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
   <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </button>
  <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
  <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
    <a href="{{route('Profile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">
    {{auth()->user()->email}}
    </a>
    <form class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white" action="{{route('logout')}}" method="post">
                @csrf
                <li><button type="submit">Logout</button></li>
                </form>
                <a href="{{route('Profile')}}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                Profile
    </a>
    <a href="{{route('Order.OrderSystem')}}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
    Order
    </a>
        </div>
    </div>
</div>
   @endauth
   @endif
   @endauth
                @guest
                <div class="hidden sm:flex flex-nowrap gap-x-5">
                <li class="p-3 border-black border-2 transition duration-500 ease-in-out rounded-full hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110"><a href="{{route('login')}}">Login</a></li>
                <li class="p-3 border-black border-2 transition duration-500 ease-in-out rounded-full hover:bg-red-600 transform hover:-translate-y-1 hover:scale-110"><a href="{{route('auth.register')}}">Register</a></li>
                </div>
<div class="sm:invisible flex flex-nowrap gap-x-5">
    <div class="flex justify-center">
        <div x-data="{ dropdownOpen: true }" class="relative ">
  <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
    <svg class="h-5 w-5 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
   <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        </button>
  <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
  <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
    <a href="{{route('login')}}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
      Login
    </a>
        <a href="{{route('auth.register')}}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
        Register
    </a>
        </div>
    </div>
</div>
                @endguest
            </ul>
         </nav>

    @yield('content')
    @livewireScripts
</body>
</html>