@extends('layouts.template')

@section('meta')
<meta name="description" content="To search for a word, simply navigate to the search bar at the top of the screen, enter the word and click on the search button.">
@endsection

@section('title')
    FAQs - Kamus Dictionary
@endsection

@section('content')

    <div class="row">
        <!-- Search Word  -->
        <div class="mx-auto" id="feedback"></div>
    </div>

    <!-- FAQs Kamus Dictionary -->
    <div id="faqs" class="row">
        <div class="col-md-12 bg-white text-center">
            
            <div class="row">
                <div class="col-md-12 text-center py-3">
                    <h3>FAQs</h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <i class="fas fa-question-circle"></i>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mx-auto">
                    
                    <h4 class="text-left"><b>1. How do I Search for a Word?</b></h4>
                    <p class="text-left">
                        To search for a word, simply navigate to the search bar at the top of the screen, enter the word and click on the search button.
                    </p>

                    <h4 class="text-left"><b>2.	Is Kamus Dictionary Available Offline?</b></h4>
                    <p class="text-left">
                        It is absolutely free to download and view offline. The Kamus Dictionary site is mobile optimized which means that it is easier to navigate on smaller screens like tablets or smartphones.
                    </p>

                    <h4 class="text-left"><b>3. Which Versions of Android & iOS will the Application Work On?</b></h4>
                    <p class="text-left">
                        The application can be used on Android versions 4.0 (Ice Cream Sandwich) and above as well as iOS 10.3.4 and above.
                    </p>

                    <h4 class="text-left"><b>4.	How do I Contact Kamus Dictionary?</b></h4>
                    <p class="text-left">
                        For more enquiries, email us at: <a href="mailto:info@kamusdictionary.com">info@kamusdictionary.com</a> 
                    </p>
                    
                    <h4 class="text-left"><b>5.	Where do I Find More Information about Kamus Dictionary?</b></h4>
                    <p class="text-left">
                        For Kamus Dictionary Social Media Contents, take a look at our pages on <a href="https://fb.me/KamusunHausa">Facebook</a>, <a href="https://twitter.com/kamusunhausa">Twitter</a> & <a href="https://instagram.com/kamusunhausa">Instagram.</a>
                    </p>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mx-auto">
                    <!-- <img class="img-responsive w-50 mb-4" src="/images/kamus.png" alt="Kamus Logo"> -->
                    <i class="far fa-question-circle"></i>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center py-3">
                    <h3>Tambayoyi Akai-Akai</h3>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-6 mx-auto">
                    
                    <h4 class="text-left"><b>1. Ta Yaya Zan Bincika Kalma?</b></h4>
                    <p class="text-left">
                        Don bincika kalma, kawai bincika mashin binciken a saman allo, shigar da kalmar kuma danna ma??allin bincike.
                    </p>

                    <h4 class="text-left"><b>2.	Shin ana iya Samun Kamus Dictionary din Kamus?</b></h4>
                    <p class="text-left">
                        Manhajar mu ta Kamus ana saukar da ita a waya kyauta ne kuma ana iya amfani dashi ba tare da hawa yanar gizo ba. 
                    </p>

                    <h4 class="text-left"><b>3. Akan Wane Irin Wayoyin Android da iPhone ne Manhajar Kamus ke Aiki?</b></h4>
                    <p class="text-left">
                        Ana iya amfani da manhajar mu a kan nau'ikan wayoyin Android 4.0 (Ice cream Sandwich) zuwa sama da iOS 10.3.4 zuwa sama.
                    </p>

                    <h4 class="text-left"><b>4.	Ta Yaya zan Tuntu??i Kamus Dictionary?</b></h4>
                    <p class="text-left">
                        Don ??arin tambayoyi, yi mana imel a:  <a href="mailto:info@kamusdictionary.com">info@kamusdictionary.com</a> 
                    </p>
                    
                    <h4 class="text-left"><b>5.	A Ina Zan Sami Karin Bayani game da Kundin ??amus?</b></h4>
                    <p class="text-left">
                    Zaka iya bincika shafukanmu na yada zumunta (Social Media) kamar  <a href="https://fb.me/KamusunHausa">Facebook</a>, <a href="https://twitter.com/kamusunhausa">Twitter</a> da kuma <a href="https://instagram.com/kamusunhausa">Instagram</a> don neman Karin bayani.
                    </p>
                    
                </div>
            </div>

        </div>
    </div>

@endsection
