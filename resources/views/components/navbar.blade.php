<nav class=" border-customBlue-200 px-4 lg:px-6 py-2.5 ">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <a href="#" class="flex items-center">
            <span class="font-modak text-4xl mt-3 text-customBlue-700 dark:text-customBlue-50">abid</span>
        </a>
        <div class="flex items-center lg:order-2">
            <x-DarkModeToggle />
            <button data-collapse-toggle="mobile-menu" type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-customBlue-500 rounded-lg lg:hidden hover:bg-customBlue-100 dark:text-customBlue-50 dark:hover:bg-customBlue-700 "
                aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="#"
                        class="block py-2 pr-4 pl-3 text-customBlue-700 rounded hover:bg-customBlue-100 lg:hover:bg-transparent lg:hover:text-customBlue-700 lg:p-0 dark:text-customBlue-400 dark:hover:bg-customBlue-700 dark:hover:text-customBlue-100 dark:border-customBlue-700"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#about"
                        class="block py-2 pr-4 pl-3 text-customBlue-700 rounded hover:bg-customBlue-100 lg:hover:bg-transparent lg:hover:text-customBlue-700 lg:p-0 dark:text-customBlue-400 dark:hover:bg-customBlue-700 dark:hover:text-customBlue-100 dark:border-customBlue-700">About</a>
                </li>
                <li>
                    <a href="#portfolio"
                        class="block py-2 pr-4 pl-3 text-customBlue-700 rounded hover:bg-customBlue-100 lg:hover:bg-transparent lg:hover:text-customBlue-700 lg:p-0 dark:text-customBlue-400 dark:hover:bg-customBlue-700 dark:hover:text-customBlue-100 dark:border-customBlue-700">Portfolio</a>
                </li>
                <li>
                    <a href="#contact"
                        class="block py-2 pr-4 pl-3 text-customBlue-700 rounded hover:bg-customBlue-100 lg:hover:bg-transparent lg:hover:text-customBlue-700 lg:p-0 dark:text-customBlue-400 dark:hover:bg-customBlue-700 dark:hover:text-customBlue-100 dark:border-customBlue-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
