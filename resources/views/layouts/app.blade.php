<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('page-title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta-description')
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation  -->
    <div class="text-center text-xl">@include('layouts.messages')</div>
    <div id="navDesktop" class="z-40 fixed bg-green-600 text-white w-full lg:grid grid-cols-6 gap-3 shadow lg:px-24 px-8 py-4 flex justify-between items-center">
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
        <div class="lg:col-span-5 hidden lg:block">
            <nav class="lg:flex justify-between list-none font-medium items-center">
                <li class="py-1"><a href="/">Home</a></li>
                <li class="py-1"><a href="{{ route('numbers') }}">Numbers</a></li>
                <li class="py-1"><a href="{{ route('pronunciation') }}">Pronunciation</a></li>
                <li class="py-1"><a href="{{ route('proverbs') }}">Proverbs</a></li>
                <li class="py-1 addANewWord cursor-pointer">Add A New Word</li>
                @if(Auth::guard('contributors')->user())
                    <li class="py-1 cursor-pointer">{{ Auth::guard('contributors')->user()->name }}</li>
                    <li class="py-1 cursor-pointer flex">
                        <span>Logout</span>&nbsp;
                        <form action="{{ route('contributor-logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="flex justify-between">
                                <div><i class="text-black md:text-white fas fa-sign-out-alt"></i></div>
                            </button>
                        </form>
                    </li>
                @endif
                <li class="bg-red-700 px-6 pt-2 pb-3 rounded border-none donateNow cursor-pointer">Donate</li>
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
                    <span>Numbers</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-building text-2xl"></i></span>
                </a>
            </li>
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between items-center">
                    <span>Pronunciation</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-person-circle-question text-2xl"></i></span>

                </a>
            </li>
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between border-b-1 items-center">
                    <span>Proverbs</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-briefcase text-2xl"></i></span>
                </a>
            </li>
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between border-b-1 items-center">
                    <span>Add a New Word</span>
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
            <hr>
            <li class="py-3 px-8">
                <a href="#" class="flex justify-between items-center">
                    <span>Donate</span>
                    &nbsp;&nbsp;
                    <span><i class="fa-solid fa-house-lock text-2xl"></i></span>
                </a>
            </li>
        </div>
    </div>
    <!-- End of Navigation Bar  -->

    <div class="relative top-24 py-6 lg:px-24 px-8">
        @yield('content')
    </div>
	<!-- <div id="app"></div> -->

    <!-- Footer  -->
    <div class="relative top-24">
        <div id="footer" class=" bg-green-600 py-12 px-8 lg:px-24 lg:grid grid-cols-5 gap-8 text-white">
            <div class="col-span-2">
                <div>
                    <img class="w-28 mx-auto lg:mx-0 mb-6" src="{{ asset('images/logo.png') }}" alt="Karmus Dictionary Logo">
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
                    <div class="lg:grid grid-cols-2 gap-3">
                        <div>
                            <li class="py-1 hover:text-green-400">
                            <a class="flex items-center py-1" href="/">
                                <span>Home</span>
                            </a>
                            </li>
                            <li class="py-1 hover:text-green-400">
                                <a class="flex items-center py-1" href="{{ route('numbers') }}">
                                    <span>Numbers</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-green-400">
                                <a class="flex items-center py-1" href="{{ route('pronunciation') }}">
                                    <span>Pronunciation</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-green-400">
                                <a class="flex items-center py-1" href="{{ route('proverbs') }}">
                                    <span>Proverbs</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-green-400 addANewWordFooter cursor-pointer">
                                <span class="flex items-center py-1">Add A New Word</span>
                            </li>
                        </div>
                        <div>
                            <li class="py-1 hover:text-green-400">
                                <a class="flex items-center py-1" href="#">
                                    <span>FAQs</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-green-400">
                                <a class="flex items-center py-1" href="#">
                                    <span>About Karmus</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-green-400">
                                <a class="flex items-center py-1" href="#">
                                    <span>Sign Up</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-green-400">
                                <a class="flex items-center py-1" href="#">
                                    <span>Sign In</span>
                                </a>
                            </li>
                            <li class="py-1 hover:text-green-400">
                                <a class="flex items-center py-1" href="#">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-span-1">    
                <div>
                    <h1 class="text-3xl font-bold mb-4">Follow Us</h1>
                    <nav class="list-none text-white">
                        <li class="py-1 hover:text-green-400">
                            <a class="flex items-center py-1" href="https://twitter.com/kamusunhausa/">
                                <span><i class="fa-brands fa-twitter text-xl"></i></span> &nbsp;&nbsp;
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li class="py-1 hover:text-green-400">
                            <a class="flex items-center py-1" href="https://fb.me/KamusunHausa/">
                                <span><i class="fa-brands fa-facebook text-xl"></i></span> &nbsp;&nbsp;
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li class="py-1 hover:text-green-400">
                            <a class="flex items-center py-1" href="https://instagram.com/kamusunhausa/">
                                <span><i class="fa-brands fa-instagram text-xl"></i></span> &nbsp;&nbsp;
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li class="py-1 hover:text-green-400">
                            <a class="flex items-center py-1" href="https://wa.me/message/BAXZQJJ3WFEBA1/">
                                <span><i class="fa-brands fa-whatsapp text-xl"></i></span> &nbsp;&nbsp;
                                <span>WhatsApp</span>
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
        <!-- Sign Up  -->
        <div id="sign-up-form" class="hidden">
            <div id="sign-up-form-content">
                <div id="sign-up-form-header" class="bg-green-600 text-white p-4 flex justify-between rounded-tl-xl rounded-tr-xl">
                    <span id="closeModalSignUp" class="cursor-pointer ml-auto">X</span>
                </div>
                <!-- Donate  -->
                <div id="donateNowContent" class="p-4 bg-white rounded-bl-xl rounded-br-xl">
                    <h1 class="px-8 py-3 text-xl font-medium text-center">Donate Now</h1>
                    <!-- Add record  -->
                    <div>
                        <form action="{{ route('donate-now') }}" method="POST" class="px-6 lg:px-8 pb-8">
                            @csrf
                            <div>
                                <input required type="text" name="name" value="{{old('name')}}" placeholder="Full Name" class="input-field">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </div>
                            <div>
                                <input required type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="input-field">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </div>
                            <div>
                                <input required type="number" name="amount" value="{{old('amount')}}" placeholder="Amount" class="input-field">
                                @error('amount')
                                    {{$message}}
                                @enderror
                            </div>
                            <div class="mt-3 text-right">
                                <button class="submit-button">DONATE NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="addWordForm" class="">
                    @if(Auth::guard('contributors')->user())                 
                        <!-- Add Word Form Content  -->
                        <div class="py-4 px-1 bg-white rounded-bl-xl rounded-br-xl">
                            <h1 class="px-8 py-3 text-xl font-medium">Add A New Word </h1>
                            <!-- Add record  -->
                            <div>
                                <form action="{{ route('contributor-add-word') }}" method="POST" class="px-6 lg:px-8 pb-8">
                                    @csrf
                                    <div class="grid grid-cols-2 gap-3 mb-1">
                                        <div>
                                            <input required type="text" name="wordEnglish" value="{{old('wordEnglish')}}" placeholder="English Word *" class="input-field">
                                            @error('wordEnglish')
                                                {{$message}}
                                            @enderror
                                        </div>
                                        <div>
                                            <input required type="text" name="wordHausa" value="{{old('wordHausa')}}" placeholder="Hausa Word *" class="input-field">
                                            @error('wordHausa')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-3 mb-1">
                                        <div>
                                            <input required type="text" name="meaning" value="{{old('meaning')}}" placeholder="Meaning *" class="input-field">
                                            @error('meaning')
                                                {{$message}}
                                            @enderror
                                        </div>
                                        <div>
                                            <input required type="text" name="maanarkamar" value="{{old('maanarkamar')}}" placeholder="Maanar Kamar *" class="input-field">
                                            @error('maanarkamar')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-3 mb-1">
                                        <div>
                                            <input required type="text" name="tilo" value="{{old('tilo')}}" placeholder="Tilo *" class="input-field">
                                            @error('tilo')
                                                {{$message}}
                                            @enderror
                                        </div>
                                        <div>
                                            <input required type="text" name="jami" value="{{old('jami')}}" placeholder="Jami *" class="input-field">
                                            @error('jami')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-3 mb-1">
                                        <div>
                                            <input required type="text" name="singular" value="{{old('singular')}}" placeholder="Singular *" class="input-field">
                                            @error('singular')
                                                {{$message}}
                                            @enderror
                                        </div>
                                        <div>
                                            <input required type="text" name="plural" value="{{old('plural')}}" placeholder="Plural *" class="input-field">
                                            @error('plural')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-3 mb-1">
                                        <div>
                                            <input type="text" name="similar_word_one" value="{{old('similar_word_one')}}" placeholder="Similar Word One" class="input-field">
                                            @error('similar_word_one')
                                                {{$message}}
                                            @enderror
                                        </div>
                                        <div>
                                            <input type="text" name="similar_word_two" value="{{old('similar_word_two')}}" placeholder="Similar Word Two" class="input-field">
                                            @error('similar_word_two')
                                                {{$message}}
                                            @enderror
                                        </div>
                                        <div>
                                            <input type="text" name="similar_word_three" value="{{old('similar_word_three')}}" placeholder="Similar Word Three" class="input-field">
                                            @error('similar_word_three')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button class="submit-button">Add Word</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Add Word Form Content  -->
                    @else
                        <!-- Sign In Form Content  -->
                        <div id="signInForm" class="p-4 bg-white rounded-bl-xl rounded-br-xl">
                            <h1 class="px-8 py-3 text-xl font-medium text-center">Sign In to your Account</h1>
                            <!-- Add record  -->
                            <div>
                                <form action="{{ route('sign-in') }}" method="POST" class="px-6 lg:px-8 pb-8">
                                    @csrf
                                    <div>
                                        <input required type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="input-field">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div>
                                        <input required type="password" name="password" value="{{old('password')}}" placeholder="Password" class="input-field">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div id="signInLink">
                                        <h2 class="hover:underline cursor-pointer">Don't have an account yet?</h2>
                                    </div>
                                    <div class="mt-3 text-right">
                                        <button class="submit-button">LOGIN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End of Sign In Form Content  -->
                        <!-- Sign Up Form  -->
                        <div id="signUpForm" class="hidden p-4 bg-white rounded-bl-xl rounded-br-xl">
                            <h1 class="px-8 py-3 text-xl font-medium">Create an Account on Kamus Dictionary</h1>
                            <!-- Add record  -->
                            <div>
                                <form action="{{ route('create-account') }}" method="POST" class="px-6 lg:px-8 pb-8">
                                    @csrf
                                    <div>
                                        <input required type="text" name="name" value="{{old('name')}}" placeholder="Full Name" class="input-field">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div>
                                        <input required type="email" name="email" value="{{old('email')}}" placeholder="Email Address" class="input-field">
                                        @error('email')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div>
                                        <input required type="password" name="password" value="{{old('password')}}" placeholder="Password" class="input-field">
                                        @error('password')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div id="signUpLink">
                                        <h2 class="hover:underline cursor-pointer">Already have an account? Login here</h2>
                                    </div>
                                    <div class="mt-3 text-right">
                                        <button class="submit-button" type="submit">SIGN UP</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End of Sign Up Form  -->
                    @endif
                </div>

            </div>     
        </div>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>