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
                        <img class="w-14 lg:w-16 lg:ml-0" src="{{ asset('images/bowdi.png') }}" alt="BOWDI logo">
                    </div>
                </a>
            </div>
        </div>
        <div class="lg:col-span-4 hidden lg:block">
            <nav class="lg:flex justify-between list-none uppercase font-medium">
                <li class="py-1 "><a href="#">Home</a></li>
                <li class="py-1 "><a href="#">NUMBERS</a></li>
                <li class="py-1 "><a href="#">PRONUNCIATION</a></li>
                <li class="py-1 "><a href="#">PROVERBS</a></li>
                <li class="py-1 "><a href="#">FAQS</a></li>
                <li class="py-1 "><a href="#">ABOUT KAMUS</a></li>
                <li class="py-1 "><a href="#">CONTACT US</a></li>
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
</body>
</html>