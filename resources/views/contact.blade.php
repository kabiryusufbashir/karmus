@extends('layouts.app')

@section('page-title')
    Contact Us - Kamus Dictionary
@endsection

@section('meta')
    <meta name="description" content="Never Let a Customer Leave Without Putting a Smile on his Face">
@endsection

@section('content')

    <div class="row">
        <!-- Search Word  -->
        <div class="mx-auto" id="feedback"></div>
    </div>

    <!-- CONTACT US Kamus Dictionary -->
    <div id="contact-us" class="row">
        <div class="w-full bg-white text-center">
            
            <div class="row">
                <div class="w-full text-center py-3">
                    <h3>Contact Us</h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <i class="far fa-address-book"></i>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <h3 class="text-center py-3">Get in Touch With Us</h3>
                    <h5 class="text-center"><b>"Never Let a Customer Leave Without Putting a Smile on his Face"</b></h5>
                    <h6 class="text-center"><i>Malam Kabir Yusuf Bashir C.E.O <a href="https://teampiccolo.com">teampiccolo.com</a></i></h6>
                    <div class="row text-left">
                        <div class="col-sm-8 mx-auto">
                            <div class="grid grid-cols-2 gap-4 items-center shadow p-8 mt-5">
                                <div class="col-sm-6">
                                    <form class="form" action="/contact-us" method="POST">
                                        @csrf

                                        <div class="col-sm-12 my-2">
                                            <b><label for="full-name">Full Name</label></b>
                                            <input class="input-field" type="text" name="name">
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <b><label for="phone">Phone</label></b>
                                            <input class="input-field" type="phone" name="phone">
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <b><label for="email-address">Email Address</label></b>
                                            <input class="input-field" type="email" name="email_address">
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <b><label for="subject">Subject</label></b>
                                            <input class="input-field" type="text" name="subject">
                                        </div>
                                        <div class="col-sm-12 my-2">
                                            <b><label for="message">Message</label></b>
                                            <textarea class="input-field" name="message"></textarea>
                                        </div>
                                        <div class="col-sm-12 my-4">
                                            <input class="input-field bg-green-600 rounded text-white" type="submit" name="contact_us" value="Send">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Social Media Channels</h4>
                                        
                                        <div class="col-sm-9 ml-5">
                                            <div class="row">
                                                <a
                                                href="https://fb.me/KamusunHausa"
                                                target="_blank"
                                                class="btn contact-details"
                                                ><i class="text-3xl fab fa-facebook-square"></i></a>
                                                
                                                <a
                                                href="https://twitter.com/kamusunhausa"
                                                target="_blank"
                                                class="btn"
                                                ><i class="text-3xl fab fa-twitter"></i></a>

                                                <a
                                                href="https://instagram.com/kamusunhausa"
                                                target="_blank"
                                                class="btn"
                                                ><i class="text-3xl fab fa-instagram"></i></a>

                                                <a
                                                href="https://wa.me/message/BAXZQJJ3WFEBA1"
                                                target="_blank"
                                                class="btn"
                                                ><i class="text-3xl fab fa-whatsapp"></i></a>
                                            </div>

                                            <div class="row my-3 mx-1">
                                                <a class="text-dark" href="tel:+2348066626200">
                                                    <i class="text-3xl fas fa-phone"></i> 
                                                    <b class="mx-4">08026713714</b>
                                                </a>
                                            </div>

                                            <div class="row my-3 mx-1">
                                                <a class="text-dark" href="mailto:info@kamusdictionary.com">
                                                    <i class="text-3xl fas fa-envelope-square"></i> 
                                                    <b class="mx-2">info@kamusdictionary.com</b>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row my-auto mx-auto">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1380.029350253521!2d8.604651825840886!3d11.952856080372493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11ae8265683aac83%3A0xd477b851b4bad822!2sIbrahim%20Kunya%20Housing%20Estate!5e0!3m2!1sen!2sng!4v1569176345363!5m2!1sen!2sng" width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                        </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
