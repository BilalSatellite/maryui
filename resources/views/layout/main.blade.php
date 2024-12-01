<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title . ' - ' . config('app.name') : config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="font-sans antialiased " x-data="{ scrolledFromTop: false, NavisOpen: false }" x-init="window.pageYOffset >= 200 ? scrolledFromTop = true : scrolledFromTop = false"
    @scroll.window="window.pageYOffset >= 200 ? scrolledFromTop = true : scrolledFromTop = false">

    <header class="fixed z-10 w-full" :class="{ 'bg-brand50': NavisOpen }">
        <!-- Topbar Start -->
        <div class="flex items-center justify-between w-full px-2 py-1 mx-auto backdrop-blur-sm"
            :class="{ 'hidden': scrolledFromTop, 'block': !scrolledFromTop }">
            <div class="flex items-center justify-start">
                <p class="hidden text-md text-brand300 md:block">
                    Call For Mobile course:
                </p>
                <p class="flex text-sm text-brand200 md:text-lg" :class="{ 'text-brand800': NavisOpen }">
                    <x-icon name="o-device-phone-mobile" class="w-4 h-4 text-brandRed md:h-6 md:w-6" />
                    9727070188
                </p>
            </div>
            <div class="flex items-center justify-end">
                <p class="hidden text-md text-brand300 md:block">
                    Call For Mobile Repairing:
                </p>
                <p class="flex text-sm text-brand200 md:text-lg" :class="{ 'text-brand800': NavisOpen }">
                    <x-icon name="o-device-phone-mobile" class="w-4 h-4 text-brandRed md:h-6 md:w-6" />
                    9825364015
                </p>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- NavBar -->
        <div class="flex w-full ">
            <nav x-cloak @click.outside="NavisOpen = false" class="z-10 w-full px-2 mx-auto"
                :class="{ 'bg-brand50': scrolledFromTop }">
                <div class="flex flex-wrap items-center justify-between mx-auto">
                    <x-app-brand />
                    {{-- <a href="/" wire:navigate>
                        <div class="flex items-center">
                            <img src="img/logo/smi3.png" alt="satellite  Logo"
                                class="h-8 transform scale-100 md:h-16" />
                            <div>
                                <h2
                                    class="-mb-1 font-[Poppins] text-xs font-semibold leading-tight tracking-widest text-brandBlack sm:text-2xl md:text-3xl">
                                    Satellite
                                </h2>
                                <p class="-mt-1 text-xs leading-tight text-center text-brandRed/80 sm:text-sm">
                                    Mobile Institute
                                </p>
                            </div>
                        </div>
                    </a> --}}
                    <div class="md:order-2">
                        <div class="flex">
                            <button type="button" class="brandBtn">Login</button>
                            <!-- Hamburger Icon -->
                            <button @click="NavisOpen = !NavisOpen" class="md:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                    :class="{
                                        'hidden': NavisOpen,
                                        'text-brand900': scrolledFromTop,
                                        'text-brand50': !
                                            scrolledFromTop
                                    }">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6"
                                    :class="{ 'hidden': !NavisOpen }">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>

                            </button>
                        </div>
                    </div>
                    <div class="items-center justify-between w-full md:order-1 md:flex md:w-auto"
                        :class="{ 'hidden': !NavisOpen }">
                        <ul class="md:text-md mb-1 flex flex-col gap-y-1 bg-brand50 font-[Poppins] text-sm md:flex-row md:gap-y-0 md:space-x-8 md:bg-transparent md:font-semibold lg:text-lg"
                            :class="{
                                'text-brand50 md:text-brand900': scrolledFromTop,
                                'text-brand50': !
                                    scrolledFromTop,
                                'items-center': !NavisOpen
                            }">
                            <li>
                                <a href="/" wire:navigate
                                    class="block py-2 pl-3 pr-4 font-semibold transition-all border-b-4 rounded-md duration-30 border-brandBlack bg-brandRed hover:text-brand200 md:border-0 md:bg-transparent md:p-0 md:hover:text-brandRed"
                                    aria-current="page">Home</a>
                            </li>
                            <!-- dropdown -->
                            <li x-data="{ dropDownOpen: false }"
                                class="relative border-b-4 rounded-md border-brandBlack bg-brandRed md:overflow-y-visible md:border-0 md:bg-transparent">
                                <button href="#"
                                    class="flex py-2 pl-3 pr-4 font-semibold transition-colors duration-300 rounded-md outline-none hover:text-brand200 focus:outline-none md:border-0 md:hover:text-brandRed"
                                    x-on:click="dropDownOpen = ! dropDownOpen">
                                    Services &#9660;
                                </button>
                                <!-- dropdown menu -->
                                <div class="right-0 w-full p-2 mt-1 rounded-md shadow bg-brandRed md:absolute md:w-48"
                                    x-show="dropDownOpen" x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-300"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90" @click.away="dropDownOpen = false"
                                    @click.outside="dropDownOpen = false" x-on:click="dropDownOpen = ! dropDownOpen">
                                    <ul class="w-full space-y-2 transition-all duration-300 rounded-md">
                                        <li>
                                            <a href="index.html#hardware_course" x-on:click="NavisOpen = false"
                                                class="flex p-2 font-semibold border-b-2 rounded-md border-brandBlack bg-brand100 text-brandBlack hover:text-brandRed">Hardware
                                                Course</a>
                                        </li>
                                        <li>
                                            <a href="index.html#software_course" x-on:click="NavisOpen = false"
                                                class="flex p-2 font-semibold border-b-2 rounded-md border-brandBlack bg-brand100 text-brandBlack hover:text-brandRed">Software
                                                Course</a>
                                        </li>
                                        <li>
                                            <a href="repairing.html"
                                                class="flex p-2 font-semibold border-b-2 rounded-md border-brandBlack bg-brand100 text-brandBlack hover:text-brandRed">Mobile
                                                Repairing</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- dropdown menu -->
                            </li>
                            <!-- dropdown -->
                            <li>
                                <a href="{{ route('about') }}"wire:navigate
                                    class="block py-2 pl-3 pr-4 font-semibold transition-all border-b-4 rounded-md duration-30 border-brandBlack bg-brandRed hover:text-brand200 md:border-0 md:bg-transparent md:p-0 md:hover:text-brandRed">About</a>
                            </li>
                            <li>
                                <a href="contact.html"
                                    class="block py-2 pl-3 pr-4 font-semibold transition-all border-b-4 rounded-md duration-30 border-brandBlack bg-brandRed hover:text-brand200 md:border-0 md:bg-transparent md:p-0 md:hover:text-brandRed">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- NavBar End -->
    </header>
    {{ $slot }}
    @stack('script')
</body>

</html>
