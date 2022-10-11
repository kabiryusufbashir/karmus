@extends('layouts.template')

@section('title')
 {{$word_check}} - Kamus Dictionary
@endsection

@section('content')

    <div class="row">
        
        <!-- English Word  -->
        <div id="hide_div" class="col-md-2 bg-white mx-auto">
            <h4 class="text-justify pt-2"><b>English Word</b></h4>
            {{$english_word->links()}}
            @foreach($english_word as $english)
                <h5>
                    <a class="text-dark" href="/{{$english->wordEnglish}}">{{$english->wordEnglish}}</a>
                </h5>
            @endforeach
        </div>

        <!-- Search Word  -->
        <div id="feedback"></div>
        <div id="wordDisplayHide" class="col-md-6 mx-auto bg-white">

            @php 
                if(!empty(session('msg'))){
            @endphp
                <div class="row my-2 bg-white">
                    <div class="col-md-12">
                        <h3>
                            <p class="text-center">{{session('msg')}}</p>
                        </h3>
                    </div>
                </div>    
            @php        
                }
            @endphp

            @include('layouts.displayword')

        </div>

        <!-- Hausa Word -->
        <div id="hide_div" class="col-md-2 bg-white mx-auto">
            <h4 class="text-justify pt-2"><b>Hausa Word</b></h4>
            {{$hausa_word->links()}}
            @foreach($hausa_word as $hausa)
                <h5>
                    <a class="text-dark" href="/{{$hausa->wordHausa}}">{{$hausa->wordHausa}}</a>
                </h5>
            @endforeach  
        </div>

    </div>

@endsection
