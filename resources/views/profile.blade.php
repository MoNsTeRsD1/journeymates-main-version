<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page - JourneyMates</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Nunito:wght@700&family=Quicksand:wght@700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-200">
    <!--navbar-->
    <div class="w-full fixed bg-white z-10">
        <div class="container mx-auto">
            <nav class="bg-white px-2 sm:px-4 py-4 mx-12">
                <div class="flex flex-wrap justify-between items-center">
                    <a href="{{ url('index') }}" class="flex">
                        <h1 class="text-2xl " style="font-family: 'Montserrat', sans-serif;">JourneyMates</h1>
                    </a>
                    <button data-collapse-toggle="mobile-menu" type="button"
                        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">Review</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">Trips</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent dark:border-gray-700">Alert</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 pr-4 pl-3 text-gray-400 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-black md:dark:hover:bg-transparent">Sign
                                    In</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="py-5 mx-12">
                <a href="#">
                    <div class="container flex flex-wrap justify-between items-center">
                        <div
                            class="border border-emerald-400 w-52 h-16 rounded hover:bg-emerald-500 duration-500 transform transition hover:text-white">
                            <div class="mx-8 my-4 flex justify-between" style="font-family: 'Nunito', sans-serif;">
                                Hotels
                                <svg width="32" height="20" viewBox="0 0 32 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32 19.3334V10.0001C32 9.64675 31.86 9.30675 31.6093 9.05742C31.36 8.80675 31.02 8.66675 30.6667 8.66675H1.33333C0.98 8.66675 0.64 8.80675 0.390667 9.05742C0.14 9.30675 0 9.64675 0 10.0001V19.3334H1.33333V16.6667H30.6667V19.3334H32ZM30.6667 10.6667C30.6667 10.4894 30.596 10.3201 30.472 10.1947C30.3467 10.0707 30.1773 10.0001 30 10.0001H2C1.82267 10.0001 1.65333 10.0707 1.528 10.1947C1.404 10.3201 1.33333 10.4894 1.33333 10.6667V15.3334H30.6667V10.6667ZM4 7.33341V2.66675C4 2.29875 4.29867 2.00008 4.66667 2.00008H27.3333C27.7013 2.00008 28 2.29875 28 2.66675V7.33341H29.3333V2.00008C29.3333 1.64675 29.1933 1.30675 28.9427 1.05742C28.6933 0.806748 28.3533 0.666748 28 0.666748H4C3.64667 0.666748 3.30667 0.806748 3.05733 1.05742C2.80667 1.30675 2.66667 1.64675 2.66667 2.00008V7.33341H4ZM6.66667 7.33341H14.6667V4.66675C14.6667 3.93075 14.0693 3.33341 13.3333 3.33341H8C7.264 3.33341 6.66667 3.93075 6.66667 4.66675V7.33341ZM17.3333 7.33341H25.3333V4.66675C25.3333 3.93075 24.736 3.33341 24 3.33341H18.6667C17.9307 3.33341 17.3333 3.93075 17.3333 4.66675V7.33341ZM13.3333 6.00008V5.20008C13.3333 4.90541 13.0947 4.66675 12.8 4.66675H8.53333C8.23867 4.66675 8 4.90541 8 5.20008V6.00008H13.3333ZM24 6.00008V5.20008C24 4.90541 23.7613 4.66675 23.4667 4.66675H19.2C18.9053 4.66675 18.6667 4.90541 18.6667 5.20008V6.00008H24Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>
                </a>
                <a href="#">
                    <div
                        class="border border-emerald-400 w-52 h-16 rounded hover:bg-emerald-500 duration-500 transform transition hover:text-white">
                        <div class="mx-8 my-4 flex justify-between" style="font-family: 'Nunito', sans-serif;">
                            Restaurants
                            <svg width="17" height="24" viewBox="0 0 17 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.188 0C14.631 0 12.33 7.004 11.528 14H13.995V22.5C13.995 23.431 14.78 24 15.495 24H15.496C16.324 24 16.996 23.328 16.996 22.5C16.998 17.463 17.005 2.246 16.995 0.851C16.992 0.357 16.635 0 16.188 0V0ZM15.997 1.333L15.996 22.5C15.996 22.776 15.771 23 15.495 23C15.338 23 14.995 22.874 14.995 22.5V13.002H12.661C13.461 7.113 15.058 2.654 15.997 1.333ZM7.554 0H6.667L7.342 6.002L6.001 6L5.998 0H4.998L4.999 6H3.996L3.998 0H2.998L2.993 6H1.702L2.299 0.002L1.39 0C1.39 0 0.778998 5.038 0.526998 7.575C0.438998 8.464 0.917998 9.337 1.617 9.897C2.56 10.653 3 10.879 3 11.57V22.5C3 23.328 3.666 24 4.497 24C5.329 24 6.001 23.328 6.001 22.5V11.575C6.001 10.873 6.434 10.657 7.383 9.906C8.096 9.342 8.603 8.452 8.504 7.55C8.229 5.005 7.554 0 7.554 0V0ZM7.437 7C7.513 7.658 7.707 8.375 6.763 9.122C5.813 9.875 5.001 10.338 5.001 11.575V22.5C5.001 22.776 4.775 23 4.497 23C4.218 23 4 22.776 4 22.5V11.57C4 10.348 3.181 9.871 2.243 9.117C1.332 8.387 1.524 7.642 1.591 7H7.437Z"
                                    fill="#030405" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div
                        class="border border-emerald-400 w-52 h-16 rounded hover:bg-emerald-500 duration-500 transform transition hover:text-white">
                        <div class="mx-8 my-4 flex justify-between" style="font-family: 'Nunito', sans-serif;">Landmarks
                            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M32 32H0V29.3333H1.33333V20C1.31467 19.2493 0.764 18.6867 0 18.6667V12H2.66667V14.6667H5.33333V12H8V16H9.33333V8H12V10.6667H14.6667V0L21.3333 2.66667L16 5.33333V8H17.3333V10.6667H20V8H22.6667V16H24V12H26.6667V14.6667H29.3333V12H32V18.6667C31.3027 18.6667 30.6907 19.1893 30.6667 19.9987V29.3333H32V32ZM17.3333 30.6667V25.3333C17.3333 24.5973 16.736 24 16 24C15.264 24 14.6667 24.5973 14.6667 25.3333V30.6667H17.3333ZM20 13.3333H12V18.6667H5.33333V17.3333H2.98133C3.66 18.116 3.976 18.9573 4 19.9667V29.3333H12V25.3333C12 23.1253 13.792 21.3333 16 21.3333C18.2067 21.3333 20 23.1267 20 25.3333V29.3333H28V19.9653C28.0253 18.968 28.3347 18.1133 29.0187 17.3333H26.6667V18.6667H20V13.3333ZM9.33333 25.3333H6.66667V22.6667C6.66667 21.9307 7.264 21.3333 8 21.3333C8.736 21.3333 9.33333 21.9307 9.33333 22.6667V25.3333ZM25.3333 25.3333H22.6667V22.6667C22.6667 21.9307 23.264 21.3333 24 21.3333C24.736 21.3333 25.3333 21.9307 25.3333 22.6667V25.3333ZM17.3333 18.6667H14.6667V16C14.6667 15.264 15.264 14.6667 16 14.6667C16.736 14.6667 17.3333 15.264 17.3333 16V18.6667Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div
                        class="border border-emerald-400 w-52 h-16 rounded hover:bg-emerald-500 duration-500 transform transition hover:text-white">
                        <div class="mx-8 my-4 flex justify-between" style="font-family: 'Nunito', sans-serif;">Trending
                            <svg width="28" height="32" viewBox="0 0 28 32" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.3333 12H27.3333L8.66667 32L12.6667 20H0.666672L19.3333 0L15.3333 12ZM3.73467 18.6667H14.516L11.8667 26.6173L24.2653 13.3333H13.484L16.1333 5.38267L3.73467 18.6667Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div
                        class="border border-emerald-400 w-52 h-16 rounded hover:bg-emerald-500 duration-500 transform transition hover:text-white">
                        <div class="mx-8 my-4 flex justify-between" style="font-family: 'Nunito', sans-serif;">Cities
                            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16 2.66667H18.6667V5.33333H21.3333V10.2693L30.6667 13.76V30.6667H32V32H0V30.6667H1.33333V16H9.33333V5.33333H12V2.66667H14.6667V0H16V2.66667ZM20 6.66667H10.6667V30.6667H12V28H18.6667V30.6667H20V6.66667ZM17.3333 29.3333H13.3333V30.6667H17.3333V29.3333ZM28 30.6667H29.3333V14.684L21.3333 11.6933V30.6667H22.6667V28H28V30.6667ZM9.33333 17.3333H2.66667V30.6667H4V28H8V30.6667H9.33333V17.3333ZM6.66667 29.3333H5.33333V30.6667H6.66667V29.3333ZM26.6667 29.3333H24V30.6667H26.6667V29.3333ZM5.33333 22.6667V25.3333H4V22.6667H5.33333ZM8 22.6667V25.3333H6.66667V22.6667H8ZM14.6667 9.33333V25.3333H13.3333V9.33333H14.6667ZM28 24V25.3333H22.6667V24H28ZM17.3333 9.33333V25.3333H16V9.33333H17.3333ZM28 21.3333V22.6667H22.6667V21.3333H28ZM5.33333 18.6667V21.3333H4V18.6667H5.33333ZM8 18.6667V21.3333H6.66667V18.6667H8ZM28 18.6667V20H22.6667V18.6667H28ZM28 16V17.3333H22.6667V16H28ZM17.3333 4H13.3333V5.33333H17.3333V4Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div
                        class="border border-emerald-400 w-52 h-16 rounded hover:bg-emerald-500 duration-500 transform transition hover:text-white">
                        <div class="mx-8 my-4 flex justify-between" style="font-family: 'Nunito', sans-serif;">Add a
                            Place
                            <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 0C11.8027 0 8 3.404 8 7.60267C8 13.8453 14.3773 14.5053 16 24C17.6227 14.5053 24 13.8453 24 7.60267C24 3.404 20.1987 0 16 0ZM16 10.6667C14.5267 10.6667 13.3333 9.47333 13.3333 8C13.3333 6.52667 14.5267 5.33333 16 5.33333C17.4733 5.33333 18.6667 6.52667 18.6667 8C18.6667 9.47333 17.4733 10.6667 16 10.6667ZM32 32L23.0573 28.764L16 32L8.55867 28.764L0 32L5.33333 20L10.6133 17.888C11.12 18.576 11.6013 19.328 12.028 20.1933L7.33067 22.0733L5.03067 27.2467L8.59333 25.9L10.6013 22.3173L9.75467 26.376L15.34 28.7613L16 26.0667L16.62 28.7653L22.1533 26.2453L21.3293 22.2013L23.4253 26.0627L27.068 27.3813L24.7493 22.0773L19.9747 20.1907C20.4 19.324 20.8827 18.5707 21.3907 17.8827L26.752 20L32 32Z"
                                    fill="black" />
                            </svg>

                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    <!--cover image-->
    
    
    <!--Profile body-->
    <main class="profile-page">
        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
                  background-image: url('https://s3-alpha-sig.figma.com/img/58b1/4433/85f6d06b4105824b80ab2321a42ddce7?Expires=1642377600&Signature=D1bo0KhctwMXddTHN-AjmArG6jXne7bZTeg2BGvpv7C9huXPHDCFKgSXv7JhRR64dNlQQsA-NSpkrIPss-R~~d11aebEnisbAUD~JJVcJOdO-whV8M8eY23VMhMst4klHspW9f~xHPrnxHSP2N8gzKv6EH0f6Akk~8Rzo8RYy~le8rKMmqWEw8s-e6yhQZVNiOWuf8j33UmsqcbPhtVJzjiVNIOvFc8maPPrQ7QFZwoXgeiWgQXjKD43j8f~giAjGhl2TFrx40djgNHWSQSxrSfCEORgpbGBAljBJRbsynnHKC6sZIYL-7OolPkAHEGEXQwwVnfx65Az5Eqt2RoCUg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA');
                ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative py-16 bg-blueGray-200">
            <div class="container mx-auto px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div class="relative">
                                    <img alt="..."
                                        src="https://i.pinimg.com/474x/64/b2/95/64b295c8c9df6a71bb8e72adcb1bb6cd.jpg"
                                        class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                <div class="py-6 px-3 mt-32 sm:mt-0">
                                    <button
                                        class="bg-emerald-400 active:bg-emerald-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                                        type="button">
                                        Edit profile
                                    </button>
                                    <button
                                        class="bg-emerald-400 active:bg-emerald-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                                        type="button">
                                        Bookmarks
                                    </button>
                                </div>
                            </div>

                            
                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                    <div class="mr-4 p-3 text-center">
                                        <span
                                            class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">22</span><span
                                            class="text-sm text-blueGray-400">Contribution</span>
                                    </div>
                                    <div class="mr-4 p-3 text-center">
                                        <span
                                            class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">10</span><span
                                            class="text-sm text-blueGray-400">Followers</span>
                                    </div>
                                    <div class="lg:mr-4 p-3 text-center">
                                        <span
                                            class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">89</span><span
                                            class="text-sm text-blueGray-400">Following</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="text-center mt-12">
                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                Alan Tuner
                            </h3>
                            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                Los Angeles, California
                            </div>
                            <div class="mb-2 text-blueGray-600 mt-10">
                                <i class="fas fa-globe mr-2 text-lg text-blueGray-400"></i>Add a website
                            </div>
                            <div class="mb-2 text-blueGray-600">
                                <i class="fas fa-info mr-2 text-lg text-blueGray-400"></i>Write some details about yourself
                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                        Write your first review!<br> Start reviewing hotels, restaurants, and places
                                        you’ve already visited.
                                    </p>
                                    <a href="#pablo" class="font-normal text-emerald-400">Show more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="relative bg-blueGray-200 pt-8 pb-6 mt-8">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap items-center md:justify-between justify-center">
                        <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                            <div class="text-sm text-blueGray-500 font-semibold py-1">
                                Made by <a href="https://www.creative-tim.com/product/notus-js"
                                    class="text-blueGray-500 hover:text-gray-800" target="_blank">Journey </a> <a
                                    href="https://www.creative-tim.com"
                                    class="text-blueGray-500 hover:text-blueGray-800" target="_blank"> Mates</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
    </main>
</body>

</html>