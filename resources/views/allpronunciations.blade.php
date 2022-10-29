@extends('layouts.app')

@section('meta')
<meta name="description" content="Pronunciations">
@endsection

@section('title')
    Pronunciations - Kamus Dictionary
@endsection

@section('content')

    <!-- PRONUNCIATION -->
    <div class="py-2 mb-4">
        <div class="w-full bg-green-600 mx-auto">
            <h2 class="text-2xl text-center py-2 text-white">Pronunciation</h2>
        </div>
    </div>
    
    <div class="lg:w-3/4 w-full border mx-auto my-3 p-2 shadow">
        <p>
            <b>Note:</b> Hausa Language does not have the letters "P", "Q"and "X" but has some Special Characters as shown below. The letter (Ƴ ƴ) (y with a right hook) is used only in Niger; in Nigeria it is written as ('Y 'y).
        </p>
        <p class="py-2">
            <b>Faɗakarwa:</b> Harshen Hausa bashi da haruffa "P", "Q" da "X" amma yana da wasu harrufa na musamman kamar yadda aka nuna a ƙasa. Harafin (Ƴ ƴ) (y tare da lanƙwasa ta dama) ana amfani da shi a Ƙasar Nijar kawai; a Nijeriya ana rubuta shi azaman ('Y 'y).
        </p>
    </div>

    <div class="lg:grid grid-cols-4 gap-3">
        <div class="mx-auto border my-4 shadow">
            @if($alphabets->count() > 0)
                <h3 class="p-3 text-xl border-b">Hausa Alphabets/ Harrufan Hausa</h3>
                    <div class="p-2">
                        @foreach($alphabets as $alphabet)
                            <div style="width:70px;" class="py-2 px-2">
                                <b>{{$alphabet->sound}}</b>
                            </div> 
                        @endforeach
                    </div>
            @endif
        </div>
        <div class="col-md-3 mx-1 mt-4 border shadow">
            <h3 class="p-3 text-xl border-b">Special Characters/ Harrufan Hausa na Musamman</h3>
                @if(count($special_characters) > 0)
                    <div class="row">
                        @foreach($special_characters as $special_character)
                            <div style="width:80px;" class="py-2 px-3">
                                <b>{{$special_character->sound}}</b>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3>No Special Character Found</h3>
                @endif
        </div>
        <div class="col-md-3 mx-1 mt-4 border shadow">
            <h3 class="p-3 text-xl border-b">Vowel/Wasali</h3>
                @if(count($vowels) > 0)
                    <div class="row">
                        @foreach($vowels as $vowel)
                            <div style="width:60px;" class="py-2 px-3">
                                <b>{{$vowel->sound}}</b>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3>No Vowel Found</h3>
                @endif
        </div>
        <div class="col-md-3 mx-1 mt-4 border shadow">
            <h3 class="p-3 text-xl border-b">Consonants/Baƙaƙe</h3>
                @if(count($consonants) > 0)
                    <div class="row">
                        @foreach($consonants as $consonant)
                            <div style="width:80px;" class="py-2 px-3">
                                <b>{{$consonant->sound}}</b> 
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3>No Consonant Found</h3>
                @endif
        </div>

    </div>
@endsection
