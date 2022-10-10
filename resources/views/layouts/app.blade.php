<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Karmus Dictionary</title>

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation  -->
    <div id="navDesktop" class="z-40 fixed bg-green-600 text-white w-full lg:grid grid-cols-5 gap-3 shadow lg:px-24 px-8 py-4 flex justify-between items-center">
        <div class="flex justify-between w-full items-center">
            <div id="menu" class="lg:hidden cursor-pointer lg:ml-auto">
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </div>
            <div class="">
                <a href="#">
                    <div class="lg:col-span-1">
                        <img class="w-14 lg:w-32 lg:ml-0" src="{{ asset('images/logo.png') }}" alt="Karmus Dictionary logo">
                    </div>
                </a>
            </div>
        </div>
        <div class="lg:col-span-4 hidden lg:block">
            <nav class="lg:flex justify-between list-none uppercase font-medium items-center">
                <li class="py-1"><a href="#">Home</a></li>
                <li class="py-1"><a href="#">NUMBERS</a></li>
                <li class="py-1"><a href="#">PRONUNCIATION</a></li>
                <li class="py-1"><a href="#">PROVERBS</a></li>
                <li class="py-1"><a href="#">CONTRIBUTE</a></li>
                <li class=" bg-red-700 px-5 py-3 rounded-full"><a href="#">DONATE</a></li>
            </nav>
        </div>
    </div>
    <!-- Mobile Nav -->
    <div id="navMobile" class="w-full fixed h-screen z-30 hidden bg-white py-8">
        <div class="list-none p-2 text-xl border-t bg-white pt-20">
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between items-center">
                    <span>Home</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-house text-2xl"></i></span>
                </a>
            </li>
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between items-center">
                    <span>Where We Work</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-building text-2xl"></i></span>
                </a>
            </li>
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between items-center">
                    <span>Who We Are</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-person-circle-question text-2xl"></i></span>

                </a>
            </li>
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between border-b-1 items-center">
                    <span>What We Do</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-briefcase text-2xl"></i></span>
                </a>
            </li>
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between border-b-1 items-center">
                    <span>Blog</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-brands fa-blogger-b text-2xl"></i></span>
                </a>
            </li>
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between items-center">
                    <span>Log In</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-house-lock text-2xl"></i></span>
                </a>
            </li>
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between items-center">
                    <span>Contact Us</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-headset text-2xl"></i></span>
                </a>
            </li>
        </div>
    </div>
    <!-- End of Navigation Bar  -->

	<div id="app"></div>

    <!-- Footer  -->
    <div class="relative top-24">
        <div id="footer" class=" bg-green-600 py-12 px-8 lg:px-24 lg:grid grid-cols-5 gap-8 text-white">
            <div class="col-span-2">
                <div>
                    <img class="w-28 mx-auto lg:mx-0 mb-6" src="{{ asset('images/logo.png') }}" alt="Karmus Dictionary Logo">
                    <h1 class="text-3xl font-bold mb-4">Office Address</h1>
                    <p class="py-1 text-left lg:w-2/3 w-full">
                        No 7 Kabiru Alhaji Bashir Street off Maiduguri Road, Kano State Nigeria
                    </p>
                </div>
                <div class="mt-4">
                    <h1 class="text-3xl font-bold mb-4">Karin Magana</h1>
                    <p class="py-1 lg:w-2/3 w-full text-justify list-item ml-6">Da rarrafe yaro ya kan tashi</p>
                    <p class="py-1 lg:w-2/3 w-full text-justify list-item ml-6">Duk wanda ya daka rawar wani, zai rasa turmin daka tasa</p>
                    <p class="py-1 lg:w-2/3 w-full text-justify list-item ml-6">Ba girin-girin ba, ta yi mai</p>
                </div>
            </div>
            <div class="col-span-2">
                <h1 class="text-3xl font-bold mb-4">Navigations</h1>
                <nav class="list-none text-white">
                    <li class="py-1 hover:text-gray-800">
                        <a class="flex items-center py-1" href="#">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="py-1 hover:text-gray-800">
                        <a class="flex items-center py-1" href="#">
                            <span>Numbers</span>
                        </a>
                    </li>
                    <li class="py-1 hover:text-gray-800">
                        <a class="flex items-center py-1" href="#">
                            <span>Pronunciation</span>
                        </a>
                    </li>
                    <li class="py-1 hover:text-gray-800">
                        <a class="flex items-center py-1" href="#">
                            <span>Proverbs</span>
                        </a>
                    </li>
                    <li class="py-1 hover:text-gray-800">
                        <a class="flex items-center py-1" href="#">
                            <span>FAQs</span>
                        </a>
                    </li>
                    <li class="py-1 hover:text-gray-800">
                        <a class="flex items-center py-1" href="#">
                            <span>About Karmus</span>
                        </a>
                    </li>
                    <li class="py-1 hover:text-gray-800">
                        <a class="flex items-center py-1" href="#">
                            <span>Sign Up</span>
                        </a>
                    </li>
                    <li class="py-1 hover:text-gray-800">
                        <a class="flex items-center py-1" href="#">
                            <span>Sign In</span>
                        </a>
                    </li>
                    <li class="py-1 hover:text-gray-800">
                        <a class="flex items-center py-1" href="#">
                            <span>Contact Us</span>
                        </a>
                    </li>
                </nav>
            </div>
            <div class="col-span-1">    
                <div>
                    <h1 class="text-3xl font-bold mb-4">Follow Us</h1>
                    <nav class="list-none text-white">
                        <li class="py-1 hover:text-gray-800">
                            <a class="flex items-center py-1" href="https://twitter.com/bornowomendevt">
                                <span><i class="fa-brands fa-twitter text-xl"></i></span> &nbsp;&nbsp;
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li class="py-1 hover:text-gray-800">
                            <a class="flex items-center py-1" href="https://web.facebook.com/bornowomen/">
                                <span><i class="fa-brands fa-facebook text-xl"></i></span> &nbsp;&nbsp;
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="py-1 hover:text-gray-800">
                            <a class="flex items-center py-1" href="https://www.linkedin.com/company/bowdi/">
                                <span><i class="fa-brands fa-linkedin text-xl"></i></span> &nbsp;&nbsp;
                                <span>LinkedIn</span>
                            </a>
                        </li>
                        <li class="py-1 hover:text-gray-800">
                            <a class="flex items-center py-1" href="#">
                                <span><i class="fa-brands fa-instagram text-xl"></i></span> &nbsp;&nbsp;
                                <span>Instagram</span>
                            </a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="py-7 text-center sm:text-sm">
            <footer>
                Founded by <a class="hover:text-green-600" href="https://bashirabdul.teampiccolo.com/">Bashir Abdul (@Sabash3k)</a><br>
                A Product of <a class="hover:text-green-600" href="https://teampiccolo.com">Team Piccolo</a><br>
                Karmus Dictionary Copyright © 2019-@php echo date('Y') @endphp All Rights Reserved 
            </footer>
        </div>
    </div>
</body>
</html>