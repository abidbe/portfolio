<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AbidDev</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])

    <style>
        .timeline::before {
            content: '';
            position: absolute;
            left: 4px;
            top: 0;
            bottom: 0;
            width: 1px;
            background-color: gray; /* Tailwind blue-500 */
        }
    </style>

    <!-- Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

</head>

<body class="bg-customBlue-50 dark:bg-gray-900 text-customBlue-900 dark:text-customBlue-100  font-poppins">
    <x-navbar />

    <header class="h-screen flex flex-col">
        <div
            class="h-full container mx-auto flex flex-col lg:flex-row items-center lg:justify-start pt-14 text-center lg:text-left justify-center">
            <div class="lg:w-1/2 px-4">
                <p class="text-2xl font-semibold text-customBlue-900 mb-4 dark:text-customBlue-50 sm:text-4xl">Hello
                    Mate 🤙, I'm
                </p>
                <h1 class="text-4xl font-bold text-customBlue-900 dark:text-customBlue-50 mb-4 sm:text-6xl">Abid
                    Ibadurrahman</h1>
                <p class="text-3xl font-medium text-customBlue-700 dark:text-customBlue-300 sm:text-5xl">
                    <span class="text-customBlue-900 dark:text-customBlue-50">a </span><span id="typed"
                        class="text-customBlue-400 font-bold"></span>
                </p>
                <div class="flex justify-center gap-3 lg:justify-start mt-10">
                    <button type="button"
                        class="flex text-customBlue-700  hover:text-white border border-customBlue-700 hover:bg-customBlue-900 lg:px-7 font-medium rounded-sm xs:text-sm px-4 py-2  text-center dark:border-customBlue-50 dark:text-customBlue-50 dark:hover:text-customBlue-700 dark:hover:bg-customBlue-50 dark:bg-transparent  ">Contact
                        Me <svg class="h-3 ms-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1" />
                        </svg></button>
                    <button type="button"
                        class="flex text-white bg-customBlue-900  hover:bg-customBlue-800 lg:px-7 font-medium rounded-sm text-sm py-2  px-4 dark:bg-customBlue-50 dark:text-customBlue-700 dark:hover:bg-customBlue-200  ">Download
                        CV <svg class="h-3 ms-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 16 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />
                        </svg></button>
                </div>
            </div>
            <div class="lg:w-1/2  lg:mt-0 lg:ml-10 flex justify-center px-4">
                <img src="{{ asset('Task-bro.svg') }}" alt="Abid" class="w-full max-w-md">
            </div>
        </div>
        <div class="flex justify-center items-center pb-6">
            <a href="#about" class="bounce-animation">
                <svg class="w-6 h-6 text-customBlue-800 dark:text-customBlue-50" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                </svg>
            </a>
        </div>
    </header>




    <section id="about" class="h-screen bg-customBlue-100 dark:bg-customBlue-950 flex items-center justify-center">
        <div class="flex flex-col md:flex-row items-center justify-center w-full max-w-7xl px-4 gap-8">
            <div class="md:w-1/2 md:flex justify-center hidden">
                <img src="{{ asset('Questions-bro.svg') }}" alt="Abid" class="w-full md:w-auto">
            </div>
            <div class="w-full md:w-1/2 mt-8 md:mt-0 md:ml-8 text-center md:text-left">
                <h2 class="text-blue-500 text-xl font-semibold">ABOUT ME</h2>
                <h1 class="text-2xl md:text-4xl font-bold mt-3">Experience in Mobile Developer and Web Developer</h1>
                <p class="mt-6 text-justify">Fresh graduate in Information Technology from Universitas Muhammadiyah
                    Yogyakarta with
                    expertise in web and mobile application development. Experienced intern at PT Telkom Witel
                    Yogyakarta
                    and graduate of the independent study program at Bangkit Academy by Google, Tokopedia, Gojek, and
                    Traveloka. Skilled in Kotlin programming and Android application development, with a deep
                    understanding
                    of web development using Laravel. Enthusiastic about contributing to innovative and dynamic teams.
                </p>
                <div class="grid grid-cols-2 mt-4 font-bold gap-1 text-start">
                    <div>Name : <span class="font-normal">Abid Ibadurrahman</span></div>
                    <div>Location : <span class="font-normal">Sleman, DI Yogyakarta</span></div>
                    <div>Email : <span class="font-normal">abidbe.123@gmail.com</span></div>
                    <div>Education : <span class="font-normal">Bachelor Degree</span></div>
                </div>
                <div class="flex items-center mt-10">
                    <button type="button"
                        class="flex items-center text-white bg-customBlue-900 hover:bg-customBlue-800 lg:px-7 font-medium rounded-sm text-sm py-2 px-4 dark:bg-customBlue-50 dark:text-customBlue-700 dark:hover:bg-customBlue-200">
                        Download CV
                        <svg class="h-3 ms-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3" />
                        </svg>
                    </button>
                    <div class="flex-grow h-px bg-gray-400 mx-4"></div>
                    <div class="flex items-center space-x-3">
                        <span class="text-gray-500">Follow me</span>
                        <a href="https://www.instagram.com/abidibadurrahman" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.311 3.608 1.286.975.975 1.224 2.242 1.286 3.608.058 1.265.069 1.645.069 4.849s-.011 3.584-.069 4.849c-.062 1.366-.311 2.633-1.286 3.608-.975.975-2.242 1.224-3.608 1.286-1.265.058-1.645.069-4.849.069s-3.584-.011-4.849-.069c-1.366-.062-2.633-.311-3.608-1.286-.975-.975-1.224-2.242-1.286-3.608-.058-1.265-.069-1.645-.069-4.849s.011-3.584.069-4.849c.062-1.366.311-2.633 1.286-3.608.975-.975 2.242-1.224 3.608-1.286C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.71 0 8.322.011 7.052.07 5.738.129 4.465.377 3.377 1.465 2.29 2.553 2.042 3.825 1.983 5.139.924 8.429.913 8.817.913 12s.011 3.584.07 4.849c.059 1.314.307 2.586 1.395 3.674 1.088 1.088 2.36 1.336 3.674 1.395 1.265.058 1.645.069 4.849.069s3.584-.011 4.849-.069c1.314-.059 2.586-.307 3.674-1.395 1.088-1.088 1.336-2.36 1.395-3.674.058-1.265.069-1.645.069-4.849s-.011-3.584-.07-4.849c-.059-1.314-.307-2.586-1.395-3.674-1.088-1.088-2.36-1.336-3.674-1.395C15.678.011 15.29 0 12 0zM12 5.838c-3.403 0-6.162 2.759-6.162 6.162S8.597 18.162 12 18.162 18.162 15.403 18.162 12 15.403 5.838 12 5.838zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441-.645-1.441-1.441 0-.796.645-1.441 1.441-1.441.796 0 1.441.645 1.441 1.441 0 .796-.645 1.441-1.441 1.441z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/abidibadurrahman/"
                            class="text-gray-500 hover:text-gray-700">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.23 0H1.77C.79 0 0 .774 0 1.74v20.522C0 23.227.79 24 1.77 24H22.23c.98 0 1.77-.773 1.77-1.738V1.74C24 .774 23.21 0 22.23 0zM7.14 20.452H3.56V9.038h3.58v11.414zm-1.79-13.09c-1.14 0-2.06-.926-2.06-2.067 0-1.142.92-2.068 2.06-2.068 1.14 0 2.06.926 2.06 2.068 0 1.14-.92 2.067-2.06 2.067zm14.088 13.09h-3.58v-5.59c0-1.337-.027-3.06-1.863-3.06-1.865 0-2.15 1.454-2.15 2.96v5.69h-3.58V9.038h3.44v1.553h.05c.48-.91 1.65-1.867 3.4-1.867 3.635 0 4.31 2.392 4.31 5.498v6.23z" />
                            </svg>
                        </a>
                        <a href="https://github.com/abidbe" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.205 11.385.6.111.82-.261.82-.579 0-.287-.01-1.044-.015-2.05-3.338.726-4.042-1.608-4.042-1.608-.546-1.385-1.332-1.754-1.332-1.754-1.089-.745.083-.73.083-.73 1.205.085 1.84 1.236 1.84 1.236 1.07 1.833 2.807 1.303 3.492.997.107-.774.419-1.304.762-1.605-2.665-.3-5.466-1.332-5.466-5.931 0-1.311.469-2.381 1.236-3.22-.124-.302-.536-1.515.116-3.158 0 0 1.008-.322 3.3 1.23.956-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.29-1.553 3.296-1.23 3.296-1.23.654 1.643.242 2.856.118 3.158.77.839 1.234 1.909 1.234 3.22 0 4.61-2.805 5.625-5.478 5.92.43.372.813 1.102.813 2.222 0 1.606-.015 2.896-.015 3.293 0 .322.218.694.825.576C20.565 21.797 24 17.298 24 12c0-6.627-5.373-12-12-12z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/+6282287339753" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.07 0C5.4 0 0 5.4 0 12.07 0 15.5 1.47 18.6 3.93 20.63v3.77l3.81-1.24c.7.2 1.45.29 2.23.29C18.6 24 24 18.6 24 12.07S18.6 0 12.07 0zM12.07 21.52c-.73 0-1.44-.1-2.12-.3l-1.45-.21-2.56.83.85-2.5-.43-.73C4.91 17.08 4.13 14.62 4.13 12.07 4.13 6.95 8.95 2.13 14.07 2.13s9.94 4.82 9.94 9.94-4.82 9.94-9.94 9.94zm4.23-7.82l-2.02-1.22c-.27-.16-.58-.24-.89-.24-.16 0-.31.03-.45.1-.15.06-.28.15-.4.26-.15.17-.31.31-.47.46-.18.17-.39.3-.62.39-.08.04-.18.06-.27.07-.06 0-.12.01-.18 0-.23-.01-.44-.1-.65-.25l-.07-.05c-.11-.08-.26-.17-.44-.28-.42-.24-.82-.57-1.21-.97-.27-.28-.5-.58-.7-.91-.03-.04-.06-.07-.08-.12-.25-.43-.44-.88-.56-1.34-.12-.42-.1-.85.06-1.29.1-.29.24-.53.42-.73.11-.12.25-.23.39-.33.13-.09.28-.17.43-.25.14-.08.3-.15.47-.19.2-.05.41-.08.63-.06h.01c.18.02.33.09.48.2.11.08.2.18.29.27.14.12.29.23.43.35.02.02.03.04.05.07l.03.03c.07.08.13.16.19.25.08.12.15.25.21.39.07.16.14.32.2.49.07.18.14.35.21.52.09.21.19.42.29.63.15.33.32.65.5.97.08.14.17.27.26.4.19.29.38.56.59.81.06.07.11.15.19.21.21.21.46.35.75.41.1.02.2.04.3.04.16 0 .3-.03.45-.09.27-.12.49-.27.67-.46.16-.16.33-.33.49-.5.11-.13.22-.26.33-.39.17-.2.33-.41.49-.61.1-.12.22-.23.34-.32.07-.06.14-.11.21-.15.14-.09.29-.13.45-.13.28 0 .55.12.83.36.27.23.52.47.76.72.08.08.14.16.19.24.09.12.14.27.13.42.01.24-.04.49-.19.73-.17.27-.37.52-.6.75-.26.25-.54.49-.84.7-.14.1-.3.18-.45.25-.23.08-.46.11-.7.12-.21.02-.43-.01-.65-.09-.31-.11-.6-.27-.89-.45-.34-.21-.66-.45-.99-.7z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h-screen py-20 flex flex-col justify-around">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-blue-500 dark:text-blue-400 text-xl font-semibold mb-4">MY EXPERTISE</h2>
            <h3 class="text-center text-3xl font-bold mb-8">Awesome Services For You</h3>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-500 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h18M9 3v2m6-2v2M4 10h16M4 14h16M4 18h16M4 22h16"></path>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold ml-4">Web Development</h4>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 mb-4">Building high-quality, scalable, and secure web applications tailored to your business needs.</p>
                    </div>
                    <a href="#" class="text-blue-500 dark:text-blue-400 font-semibold mt-4">Explore Service</a>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-500 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 2H8c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM12 18h.01M12 14h.01M12 10h.01M12 6h.01"></path>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold ml-4">Mobile Development</h4>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 mb-4">Creating intuitive and robust mobile applications for Android and iOS platforms to enhance your digital presence.</p>
                    </div>
                    <a href="#" class="text-blue-500 dark:text-blue-400 font-semibold mt-4">Explore Service</a>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full">
                                <svg class="w-6 h-6 text-blue-500 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12l9-5-9-5-9 5 9 5z"></path>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold ml-4">Web Design</h4>
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 mb-4">Crafting visually stunning and user-friendly websites to create a memorable online presence for your brand.</p>
                    </div>
                    <a href="#" class="text-blue-500 dark:text-blue-400 font-semibold mt-4">Explore Service</a>
                </div>
            </div>
        </div>
        <div class="px-1 md:mt-0 mt-20">
            <div class="container mx-auto px-4 md:px-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Education Section -->
                    <div>
                        <h2 class="text-blue-500 dark:text-blue-400 text-sm font-semibold mb-2">QUALIFICATION</h2>
                        <h3 class="text-2xl font-bold mb-8">My Education</h3>
                        <div class="space-y-8 relative timeline">
                            <div class="relative pl-10">
                                <div class="absolute left-0 top-2.5 w-2.5 h-2.5 bg-blue-500 dark:bg-blue-400 rounded-full"></div>
                                <h4 class="text-lg font-semibold">SMAIT YAPIDH <span class="text-gray-500 dark:text-gray-400">(2017 - 2020)</span></h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Bekasi, Jawa Barat</p>
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-500 dark:text-blue-400 text-xs font-semibold mt-2 inline-block py-1 px-3 rounded-full">High School Diploma In MIPA</span>
                            </div>
                            <div class="relative pl-10">
                                <div class="absolute left-0 top-2.5 w-2.5 h-2.5 bg-blue-500 dark:bg-blue-400 rounded-full"></div>
                                <h4 class="text-lg font-semibold">Universitas Muhammadiyah Yogyakarta <span class="text-gray-500 dark:text-gray-400">(2020 - 2024)</span></h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Bantul, DI Yogyakarta</p>
                                <p class="text-gray-500 dark:text-gray-400">The final project is the Development of an Information System for PT. Jambi Bara Sejahtera Using the Laravel Framework.</p>
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-500 dark:text-blue-400 text-xs font-semibold mt-2 inline-block py-1 px-3 rounded-full">Bachelor Degree In Information Technology - 3.56/4.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Experience Section -->
                    <div>
                        <h2 class="text-blue-500 dark:text-blue-400 text-sm font-semibold mb-2">WORK EXPERIENCE</h2>
                        <h3 class="text-2xl font-bold mb-8">My Awesome Experience</h3>
                        <div class="space-y-8 relative timeline">
                            <div class="relative pl-10">
                                <div class="absolute left-0 top-2.5 w-2.5 h-2.5 bg-blue-500 dark:bg-blue-400 rounded-full"></div>
                                <h4 class="text-lg font-semibold">PT Telkom Indonesia Witel Yogyakarta <span class="text-gray-500 dark:text-gray-400">(2023)</span></h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Yogyakarta, DI Yogyakarta</p>
                                <p class="text-gray-500 dark:text-gray-400">Developed a simple web-based application to streamline the creation of event reports.</p>
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-500 dark:text-blue-400 text-xs font-semibold mt-2 inline-block py-1 px-3 rounded-full">Internship</span>
                            </div>
                            <div class="relative pl-10">
                                <div class="absolute left-0 top-2.5 w-2.5 h-2.5 bg-blue-500 dark:bg-blue-400 rounded-full"></div>
                                <h4 class="text-lg font-semibold">Bangkit Academy led by Google, Tokopedia, Gojek, & Traveloka <span class="text-gray-500 dark:text-gray-400">(2024)</span></h4>
                                <p class="text-gray-500 dark:text-gray-400 text-xs">Online</p>
                                <p class="text-gray-500 dark:text-gray-400">Developed a Capstone project: an Android-based packaged drink sugar detector application.</p>
                                <span class="bg-blue-100 dark:bg-blue-900 text-blue-500 dark:text-blue-400 text-xs font-semibold mt-2 inline-block py-1 px-3 rounded-full">Studi independent</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h-screen py-20 flex flex-col justify-around">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-blue-500 dark:text-blue-400 text-xl font-semibold mb-4">MY SKILL</h2>
            <h3 class="text-center text-3xl font-bold mb-8">Technology I've Been Working With Recently</h3>
            <div class="flex flex-wrap justify-center gap-4">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML" class="w-10 h-10">
                    <span class="text-lg font-semibold">HTML</span>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS" class="w-10 h-10">
                    <span class="text-lg font-semibold">CSS</span>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="JavaScript" class="w-10 h-10">
                    <span class="text-lg font-semibold">JavaScript</span>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/Kotlin_Icon.png" alt="Kotlin" class="w-10 h-10">
                    <span class="text-lg font-semibold">Kotlin</span>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP" class="w-10 h-10">
                    <span class="text-lg font-semibold">PHP</span>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1280px-Laravel.svg.png" alt="Laravel" class="w-10 h-10">
                    <span class="text-lg font-semibold">Laravel</span>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Android_Studio_Logo_%282023%29.svg/1280px-Android_Studio_Logo_%282023%29.svg.png" alt="Android Studio" class="w-10 h-10">
                    <span class="text-lg font-semibold">Android Studio</span>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/1280px-Visual_Studio_Code_1.35_icon.svg.png" alt="Vscode" class="w-10 h-10">
                    <span class="text-lg font-semibold">Vscode</span>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg" alt="node.js" class="w-10 h-10">
                    <span class="text-lg font-semibold">Node.js</span>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/MySQL_textlogo.svg" alt="mysql" class="w-10 h-10">
                    <span class="text-lg font-semibold">Mysql</span>
                </div>
            </div>
        </div>
    </section>
    

</body>

</html>
