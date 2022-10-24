<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Icon" href="/images/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Kamus Dictionary') }}</title> -->
    <title>@yield('title')</title>

    <!-- Scripts -->
    
    <!-- GOOGLE ADSENSE  -->
    <script data-ad-client="ca-pub-4291686374160482" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174458337-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-174458337-1');
    </script>

    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">

        <div class="row bg-success">

            <div id="mobile_nav">
                
                <div id="mobile_top" class="d-flex col-md-12">
                    
                    <div id="mobile_row">
                        <div class="col-md-10 my-auto py-3">
                            <a href="/">
                                <img id="logo" src="/images/logo.png" alt="Logo" class="img-responsive w-75">
                            </a>
                        </div>
                        
                        <div id="toggle_btn" class="col-md-1 my-3">
                            <img src="/images/toggle.png" alt="toggle btn" class="img-responsive">
                        </div>
                    </div>
                    
                    <div id="nav_menu" class="col-md-9 py-3">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div>
                                <ul class="navbar-nav">
                                    <li class="nav-item active mx-auto pt-1">
                                        <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item mx-auto pt-1">
                                        <a class="nav-link text-white" href="/all-numbers">Numbers</a>
                                    </li>
                                    <li class="nav-item mx-auto pt-1">
                                        <a class="nav-link text-white" href="/all-pronunciations">Pronunciation</a>
                                    </li>
                                    <li class="nav-item mx-auto pt-1">
                                        <a class="nav-link text-white" href="/hausa-proverb">Proverbs</a>
                                    </li>
                                    <li class="nav-item mx-auto pt-1">
                                        <a class="nav-link text-white" href="/faqs#faqs">FAQs</a>
                                    </li>
                                    <li class="nav-item mx-auto pt-1">
                                        <a class="nav-link text-white" href="/about-kamus#about-kamus">About Kamus</a>
                                    </li>
                                    <!-- <li class="nav-item mx-auto pt-1">
                                        <a class="nav-link text-white" href="/developers#developers">Developers</a>
                                    </li> -->
                                    <li class="nav-item mx-auto pt-1">
                                        <a class="nav-link text-white" href="/contact-us#contact-us">Contact Us</a>
                                    </li>
                                    <!-- <li class="nav-item mx-auto pt-1">
                                        <a class="nav-link text-white" href="#">Download App</a>
                                    </li>
                                    <li class="nav-item mx-auto">
                                        <a
                                            href="#"
                                            target="_blank"
                                            class="btn"
                                        ><i class="fab fa-android"></i></a
                                        >
                                    </li>
                                    <li class="nav-item mx-auto">
                                        <a
                                            href="#"
                                            target="_blank"
                                            class="btn"
                                            ><i class="fab fa-apple"></i></a
                                        >
                                    </li> -->
                                </ul>
                            </div>
                        </nav>
                    
                    </div>
                </div>

            
            </div>
        
        </div>

        <div class="row border-bottom">
            <div class="mx-auto col-md-6 my-3 bg-white py-1 text-white">
                <form id="searchWordForm" action="/search" method="POST">
                    @csrf
                    <div class="row my-1">
                        <div class="col-md-4 my-1">
                            <select class="text-dark bg-white form-control" name="search_lang" id="search_lang">
                                <option value="select">Select Language</option>
                                <option value="hausa">Hausa</option>
                                <option value="english">English</option>
                            </select>
                        </div>
                        <div class="col-md-6 my-1">
                            <input class="border form-control" id="search" name="searchhausa" type="text" placeholder="Bincika" />
                            <input class="border form-control" style="display:none;" id="searchenglish" name="searchenglish" type="text" placeholder="Search" />
                        </div>
                        <div class="col-md-2 my-1">
                            <input disabled="disabled" id="search_submit" class="btn btn-success text-white" type="submit" value="Search">
                        </div>
                    </div>

                </form>
            </div>
        </div>
        
        <!-- <hr> -->
        @yield('content')

        <div class="row py-4 justify-content-center bg-white">
            
            <!-- <div class="col-md-12 text-center">
                Do you have any Question, Feedback or Word Suggestion?<br>
                Write to Us & we will reply you back shortly! <br>
            </div>
            <div class="row col-md-5 justify-content-center mt-2">
                <a target="_blank" href="/contact-us">
                    <button style="border-radius:5px" class="border border-success bg-success text-white py-2">Contact Us Now</button>
                </a>
            </div> -->
            
            <div class="col-md-12 text-center mt-2 border-top py-2">
                <h3>MOBILE APP COMING SOON ON</h3>  <i class="fab fa-android ml-1"></i> <i class="fab fa-apple ml-1"></i>    
            </div>
            
        </div>
        
        <footer>
            <div class="row">
                
                <div class="col-md-12 bg-success text-white py-3">
                    <div class="row">
                        <div class="col-md-11 mx-auto">
                            <nav class="mt-2">
                                <ul>
                                    <li class="mx-4">
                                        <a href="/">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="mx-4">
                                        <a href="/about-kamus#about-kamus">About Kamus</a>
                                    </li>
                                    <li class="mx-4">
                                        <a href="/faqs#faqs">FAQs</a>
                                    </li>
                                    <!-- <li class="mx-4">
                                        <a href="/developers#developers">Developers</a>
                                    </li> -->
                                    <li class="mx-4">
                                        <a href="contact-us#contact-us">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <footer class="col-sm-12 text-dark bg-white py-3">
                    <p class="text-center">
                        Founded by <a class="" href="https://bashirabdul.teampiccolo.com/"> Bashir Abdul (@Sabash3k) </a><br> 
                        A Product of 
                        <a class="" href="https://teampiccolo.com">teampiccolo.com</a> 
                        &copy; 2019 -
                        
                        @php
                            echo date('Y');
                        @endphp <br>
                        All Rights Reserved
                    </p>
                    
                    <div class="text-center">
                        <a
                            href="https://fb.me/KamusunHausa"
                            target="_blank"
                            class="btn contact-details"
                            ><i class="fab fa-facebook-square"></i></a
                        >
                        <a
                            id="profile-link"
                            href="https://instagram.com/kamusunhausa"
                            target="_blank"
                            class="btn contact-details"
                            ><i class="fab fa-instagram"></i></a
                        >
                        <a
                            href="https://twitter.com/kamusunhausa"
                            target="_blank"
                            class="btn contact-details"
                            ><i class="fab fa-twitter"></i></a
                        >
                        <a
                            href="https://wa.me/message/BAXZQJJ3WFEBA1"
                            target="_blank"
                            class="btn contact-details"
                            ><i class="fab fa-whatsapp"></i></a
                        >
                    </div>
                </footer>
            </div>

        </footer>
        
    </div>
    <script>
        
        $(document).on('change', '#search_lang', function(){

            

            $val = $('#search_lang').val();
            $search_placeholder = $('#search').attr('placeholder');

                if($val == 'select'){
                    $search_submit = $('#search_submit').attr('disabled','disabled');
                    $search = $('#search').attr('disabled','disabled');
                }else if($val == 'hausa'){
                    $search_placeholder = $('#search').attr('placeholder','Bincika');
                    $search_submit = $('#search_submit').attr('value','Bincika');
                    $('#searchenglish').css('display','none');
                    $('#search').css('display','block');
                    $search = $('#search').removeAttr('disabled');

                }else{
                    $search_placeholder = $('#search').attr('placeholder','Search');
                    $search_submit = $('#search_submit').attr('value','Search');
                    $('#search').css('display','none');
                    $('#searchenglish').css('display','block');
                    
                }
        });

        $("#searchenglish").autocomplete({
            
            source: function(request, response) {
                $.ajax({
                url: "{{url('autocompleteenglish')}}",
                data: {
                    term : request.term
                },
                dataType: "json",
                success: function(data){
                    var resp = $.map(data,function(obj){
                        return obj.wordEnglish;
                    }); 

                        response(resp);
                    }
                });
            },
            minLength: 1
        });

        $("#search").autocomplete({
            
            source: function(request, response) {
                $.ajax({
                url: "{{url('autocompletehausa')}}",
                data: {
                    term : request.term
                },
                dataType: "json",
                success: function(data){
                    var resp = $.map(data,function(obj){
                        return obj.wordHausa;
                    }); 

                        response(resp);
                    }
                });
            },
            minLength: 1
        });

    </script>
    <script src="/js/jquery.js" type="text/javascript"></script>
    <script src="/js/script.js" type="text/javascript"></script>
</body>
</html>