<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav x-data="{ open: false }" class="shadow-xl text-yellow-100 dark:text-yellow-100 bg-red-400 dark:bg-red-400">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center text-2xl font-bold">
    
                    <a href="{{route('activities.index')}}" class="px-3 hover:shadow-xl hover:underline">Activity</a>
        
                    <a href="{{route('room.index')}}" class="px-3 hover:shadow-xl hover:underline">Room</a>
        
                    <a href="{{route('contact.index')}}" class="px-3 hover:shadow-xl hover:underline">Contact</a>
        
                    <a href="{{route('booking.index')}}" class="px-3 hover:shadow-xl hover:underline">Booking</a>
    
                </div>
    
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-black dark:text-black hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150" style="background-color:#D74747">
                                <div>{{ Auth::user()->name }}</div>
    
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content" class="dark:bg-gray-600">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
    

                
            </div>
        </div>
    
            
    </nav>
    
</body>
</html>