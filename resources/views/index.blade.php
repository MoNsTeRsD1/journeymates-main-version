<?php
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JourneyMates</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Nunito:wght@700&family=Quicksand:wght@700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!--navbar-->

   @include('includes.navbar')

    
<!--small cards-->
    <div class="container mx-auto py-5 pb-16">
        <h1 class="text-2xl pb-6 mx-12 pt-8" style="font-family: 'Nunito', sans-serif;">You might also like these</h1>
        <div class="flex justify-between">
            <div class="mx-12">
                <div
                    class="relative pl-1 flex justify-center rounded-xl hover:scale-105 duration-500 transform transition cursor-pointer">
                    <!-- Tag Discount -->
                    <div class="w-72 pb-2 bg-white rounded-xl shadow-xl z-10">
                        <div class="relative">
                            <!-- :src="image.largeImageURL"     -->
                            <img src="https://cdn.pixabay.com/photo/2010/12/13/10/05/berries-2277_640.jpg"
                                class="max-h-60 object-cover rounded-t-xl" alt="">
                            <!-- Tag rekomendasi -->
                            <div
                                class="bottom-0 right-0 mb-2 mr-2 px-2 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">
                                Recommended</div>
                        </div>
                        <div class="px-2 py-1">
                            <!-- Product Title -->
                            <div class="text-sm md:text-base font-bold pr-2">Shop Name</div>
                            <div class="flex py-2">
                                <!-- Distance -->
                                <div class="bg-gray-200 p-1 mr-2 rounded-full text-xs font-medium text-gray-900">
                                    0.5 Km
                                </div>
                                <div class="flex justify-between item-center">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-3 md:h-5 md:w-5 text-yellow-500" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <!-- Rating total -->
                                        <p class="text-gray-600 font-bold text-xs md:text-sm ml-1">
                                            4.96
                                            <!-- Jumlah review -->
                                            <span class="text-gray-500 font-normal">(76 rewiews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Alamat -->
                            <p class="pb-1 md:pb-2 text-xs md:text-sm text-gray-500">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <!-- Tombol pesan -->
                            <a class="duration-500 transform transition inset-x-0 bottom-0 flex justify-center bg-emerald-400 hover:bg-white text-sm md:text-base border hover:border-emerald-500 rounded-xl p-1 text-gray-100 hover:text-emerald-500"
                                href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-12">
                <div
                    class="relative pl-1 flex justify-center rounded-xl hover:scale-105 duration-500 transform transition cursor-pointer">
                    <!-- Tag Discount -->
                    <div class="w-72 pb-2 bg-white rounded-xl shadow-xl z-10">
                        <div class="relative">
                            <!-- :src="image.largeImageURL"     -->
                            <img src="https://cdn.pixabay.com/photo/2010/12/13/10/05/berries-2277_640.jpg"
                                class="max-h-60 object-cover rounded-t-xl" alt="">
                            <!-- Tag rekomendasi -->
                            <div
                                class="bottom-0 right-0 mb-2 mr-2 px-2 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">
                                Recommended</div>
                        </div>
                        <div class="px-2 py-1">
                            <!-- Product Title -->
                            <div class="text-sm md:text-base font-bold pr-2">Shop Name</div>
                            <div class="flex py-2">
                                <!-- Distance -->
                                <div class="bg-gray-200 p-1 mr-2 rounded-full text-xs font-medium text-gray-900">
                                    0.5 Km
                                </div>
                                <div class="flex justify-between item-center">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-3 md:h-5 md:w-5 text-yellow-500" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <!-- Rating total -->
                                        <p class="text-gray-600 font-bold text-xs md:text-sm ml-1">
                                            4.96
                                            <!-- Jumlah review -->
                                            <span class="text-gray-500 font-normal">(76 rewiews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Alamat -->
                            <p class="pb-1 md:pb-2 text-xs md:text-sm text-gray-500">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <!-- Tombol pesan -->
                            <a class="duration-500 transform transition inset-x-0 bottom-0 flex justify-center bg-emerald-400 hover:bg-white text-sm md:text-base border hover:border-emerald-500 rounded-xl p-1 text-gray-100 hover:text-emerald-500"
                                href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-12">
                <div
                    class="relative pl-1 flex justify-center rounded-xl hover:scale-105 duration-500 transform transition cursor-pointer">
                    <!-- Tag Discount -->
                    <div class="w-72 pb-2 bg-white rounded-xl shadow-xl z-10">
                        <div class="relative">
                            <!-- :src="image.largeImageURL"     -->
                            <img src="https://cdn.pixabay.com/photo/2010/12/13/10/05/berries-2277_640.jpg"
                                class="max-h-60 object-cover rounded-t-xl" alt="">
                            <!-- Tag rekomendasi -->
                            <div
                                class="bottom-0 right-0 mb-2 mr-2 px-2 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">
                                Recommended</div>
                        </div>
                        <div class="px-2 py-1">
                            <!-- Product Title -->
                            <div class="text-sm md:text-base font-bold pr-2">Shop Name</div>
                            <div class="flex py-2">
                                <!-- Distance -->
                                <div class="bg-gray-200 p-1 mr-2 rounded-full text-xs font-medium text-gray-900">
                                    0.5 Km
                                </div>
                                <div class="flex justify-between item-center">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-3 md:h-5 md:w-5 text-yellow-500" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <!-- Rating total -->
                                        <p class="text-gray-600 font-bold text-xs md:text-sm ml-1">
                                            4.96
                                            <!-- Jumlah review -->
                                            <span class="text-gray-500 font-normal">(76 rewiews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Alamat -->
                            <p class="pb-1 md:pb-2 text-xs md:text-sm text-gray-500">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <!-- Tombol pesan -->
                            <a class="duration-500 transform transition inset-x-0 bottom-0 flex justify-center bg-emerald-400 hover:bg-white text-sm md:text-base border hover:border-emerald-500 rounded-xl p-1 text-gray-100 hover:text-emerald-500"
                                href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-12">
                <div
                    class="relative pl-1 flex justify-center rounded-xl hover:scale-105 duration-500 transform transition cursor-pointer">
                    <!-- Tag Discount -->
                    <div class="w-72 pb-2 bg-white rounded-xl shadow-xl z-10">
                        <div class="relative">
                            <!-- :src="image.largeImageURL"     -->
                            <img src="https://cdn.pixabay.com/photo/2010/12/13/10/05/berries-2277_640.jpg"
                                class="max-h-60 object-cover rounded-t-xl" alt="">
                            <!-- Tag rekomendasi -->
                            <div
                                class="bottom-0 right-0 mb-2 mr-2 px-2 rounded-lg absolute bg-yellow-500 text-gray-100 text-xs font-medium">
                                Recommended</div>
                        </div>
                        <div class="px-2 py-1">
                            <!-- Product Title -->
                            <div class="text-sm md:text-base font-bold pr-2">Shop Name</div>
                            <div class="flex py-2">
                                <!-- Distance -->
                                <div class="bg-gray-200 p-1 mr-2 rounded-full text-xs font-medium text-gray-900">
                                    0.5 Km
                                </div>
                                <div class="flex justify-between item-center">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-3 md:h-5 md:w-5 text-yellow-500" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <!-- Rating total -->
                                        <p class="text-gray-600 font-bold text-xs md:text-sm ml-1">
                                            4.96
                                            <!-- Jumlah review -->
                                            <span class="text-gray-500 font-normal">(76 rewiews)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Alamat -->
                            <p class="pb-1 md:pb-2 text-xs md:text-sm text-gray-500">Lorem ipsum dolor sit amet,
                                consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            </p>
                            <!-- Tombol pesan -->
                            <a class="duration-500 transform transition inset-x-0 bottom-0 flex justify-center bg-emerald-400 hover:bg-white text-sm md:text-base border hover:border-emerald-500 rounded-xl p-1 text-gray-100 hover:text-emerald-500"
                                href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--big cards-->
    <div class="container mx-auto py-5 pb-16">
        <h1 class="text-2xl pb-6 mx-12" style="font-family: 'Nunito', sans-serif;">Dream your next trip</h1>
        <div class="flex justify-between">
            <div class="h-96 w-96 mx-12 hover:scale-105 duration-500 transform transition cursor-pointer">
                <div class="absolute bottom-5">
                    <h1 class="text-3xl text-white ml-5" style="font-family: 'Quicksand', sans-serif;">Bandung,
                        <br>Indonesia
                    </h1>
                </div>
                <img class="w-full h-96 object-cover rounded"
                    src="https://s3-alpha-sig.figma.com/img/72f0/4146/5f93f37b9ef9941e3ca8314daaf4fd80?Expires=1642377600&Signature=X6BpnHNSRabh6CRzGC3MdlCqRrEZbtBC8djYw6fleeYPIvIdZTmjWcTB-5usvpSjDeftq2UEzOT-XkbIAqK0iZ0ARvBrDTQIejrSw55z5s1pMzEwbmsUfUtpWsKGyEhS-qDdCqibiyUjpd4nnzufcdLv2taWkgFvv1uhIeCVaYkJnLnm1e7CRs4gMXFURPWTLsh~0tvZcww0pOSjYG0MB2RNP1cUhpjQ~nU1NxlajqBPA3GvBU~UeWM7J5wLkeJmhzRXh8cs1f5K8aGGE1jT0Srhv6KfqJszqJqOAlyE4VEBkchFvsEAB0b38BgSaRy~~AoGrkuh1DgpBjHw8HHGWg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
                    alt="bandung">
            </div>
            <div class="h-96 w-96 mx-12 hover:scale-105 duration-500 transform transition cursor-pointer">
                <div class="absolute bottom-5">
                    <h1 class="text-3xl text-white ml-5" style="font-family: 'Quicksand', sans-serif;">Bogor,
                        <br>Indonesia
                    </h1>
                </div>
                <img class="w-full h-96 object-cover rounded"
                    src="https://s3-alpha-sig.figma.com/img/7bfb/a07c/73199bf39b5671d3c72b81713ffeeb27?Expires=1642377600&Signature=P5Umzsjj7iWN7PCeCedxzlcKZKmak9kKCQk1VSkTZn4f5UkeSLtdtMPL-hKH1h5LO8zXa8vQq7oRtDJ4rXGEK0duunMC~DXHKMUunrzR9YGdyBUhweT7lhe8aAHJ2Qzy257cy0dO1sS2jm1TUz4yujG7ypKpx7AO4db6yb7c70TE0zxs12YuhCUVirUGyDt6wu~S9IHwbXB3dnyiCn4voEBizBVwfJzQnYF-0X~gGdNiEKfg4sAutZIQye-ntTijFfBSo1hgLZJwrWt6HiQPMWe3xRLntcB7o-B5xkd53s3ElY1jhAj5SUwW3JNE96hbgizHOGEGMjqFT7feEYr8Nw__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
                    alt="bogor">
            </div>
            <div class="h-96 w-96 mx-12 hover:scale-105 duration-500 transform transition cursor-pointer">
                <div class="absolute bottom-5">
                    <h1 class="text-3xl text-white ml-7" style="font-family: 'Quicksand', sans-serif;">Bali,
                        <br>Indonesia
                    </h1>
                </div>
                <img class="w-full h-96 object-cover rounded"
                    src="https://s3-alpha-sig.figma.com/img/4d1f/15d7/92e2b42ab6f65c282033560a4b3eb046?Expires=1642377600&Signature=SrH8NQP-C35TElajq3HAdp1q-uNv-LCb7w1PLGog~2wwY~K2Kkzq9MjeZkNR3qtg38hRHRFCCRCcdwP-oBwa2dZTtZs4E~KbxPeAygP6ftUa4m0zPlJ-XLBXGodJuoeH~C2ncD6BTuVfT~t8BXwmFRoPYPst0-KYAqiKS~exV2gNESMeJcL3ErShd7lpYKlCEgMNzdBu48gZloUlKQCD-K2IOWw5fWO8tagLGUvxUTnfgXNk-etPWX8dxjN1UhtSkZYuJeu3EJU5EPcRfzZNUvv4jQZxY0DN0F6lPGBi60NplhAlppPFLin~Ek7F3guT8FGh1BBFzM-6UMbFS-RTUg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
                    alt="bali">
            </div>
        </div>
    </div>
    </div>
</body>

</html>