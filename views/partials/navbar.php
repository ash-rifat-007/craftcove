<!-- Navbar -->
<nav class="bg-orange-400 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div>
            <a href="#" class="text-white text-2xl font-bold"><img src="resources/logo.png" alt="" class="w-32"></a>
        </div>
        <!-- Navigation Links -->
        <div class="hidden md:block">
            <ul class="flex space-x-8">
                <li><a href="#" class="text-white hover:text-amber-200">Home</a></li>
                <li><a href="#" class="text-white hover:text-amber-200">New Added</a></li>
                <li><a href="#" class="text-white hover:text-amber-200 flex items-center justify-center space-x-1"> <span>Top Selling</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd"
                                  d="M8.074.945A4.993 4.993 0 0 0 6 5v.032c.004.6.114 1.176.311 1.709.16.428-.204.91-.61.7a5.023 5.023 0 0 1-1.868-1.677c-.202-.304-.648-.363-.848-.058a6 6 0 1 0 8.017-1.901l-.004-.007a4.98 4.98 0 0 1-2.18-2.574c-.116-.31-.477-.472-.744-.28Zm.78 6.178a3.001 3.001 0 1 1-3.473 4.341c-.205-.365.215-.694.62-.59a4.008 4.008 0 0 0 1.873.03c.288-.065.413-.386.321-.666A3.997 3.997 0 0 1 8 8.999c0-.585.126-1.14.351-1.641a.42.42 0 0 1 .503-.235Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a></li>
                <li><a href="#" class="text-white hover:text-amber-200">Products</a></li>
            </ul>
        </div>
        <!-- User and Cart Icons -->
        <div class="flex items-center space-x-8 justify-center">
            <!-- User Icon -->
            <a href="#" class="text-white hover:text-yellow-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                </svg>

            </a>
            <!-- Cart Icon -->
            <a href="#" class="text-white hover:text-yellow-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                </svg>

            </a>
        </div>
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button class="text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>
        </div>
    </div>
</nav>
