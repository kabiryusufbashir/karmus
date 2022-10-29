@extends('layouts.app')

@section('page-title')
    {{$word}} - Kamus Dictionary
@endsection

@section('content')
    <div class="lg:grid grid-cols-8 gap-2 text-gray-700">
        <div class="col-span-2 lg:w-3/4">
            <h4 class="text-justify py-3"><b>English Word</b></h4>
            {{$english_word->links()}}
            @foreach($english_word as $english)
                <h5>
                    <a class="text-dark" href="/{{$english->wordEnglish}}">{{$english->wordEnglish}}</a>
                </h5>
            @endforeach
        </div>
        <div class="col-span-4">
            @include('layouts.displayword')
        </div>
        
        <div class="col-span-2 lg:w-3/4 lg:ml-8">
            <h4 class="text-justify py-3"><b>Hausa Word</b></h4>
            
            {{$hausa_word->links()}}
            @foreach($hausa_word as $hausa)
                <h5>
                    <a class="text-dark" href="/{{$hausa->wordHausa}}">{{$hausa->wordHausa}}</a>
                </h5>
            @endforeach
        </div>
    </div>
@endsection