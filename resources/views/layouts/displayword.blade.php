<!-- WORDS   -->
<div class="py-2 row border">
    <div class="ml-3 bg-white">
        <h4 class="text-justify pt-2"><b>Kalma (Word)</b></h4>
        <h5 class="text-justify">{{$word_search->wordHausa}}</h5>
    </div>
</div>

<!-- ENGLISH & HAUSA      -->
<div class="row py-2  border d-flex flex-row justify-content-between">
    <div class="ml-3">
        <h4 class="text-justify"><b>English</b></h4>
        <h5 class="text-justify">{{$word_search->wordEnglish}}</h5>
    </div>
    <div class="mx-3">
        <h4 class="text-justify"><b>Hausa</b></h4>
        <h5 class="text-justify">{{$word_search->wordHausa}}</h5>
    </div>
</div>

<!-- Similar Words -->
@php
    if(!empty($word_search->similar_word_one) && !empty($word_search->similar_word_two) && !empty($word_search->similar_word_three) ){
@endphp    
        <div class="row py-2 border">
            <div class="ml-3 mx-auto w-full bg-white">
                <h4 class="text-justify"><b>Synonyms (Kalma mafi Alaƙa)</b></h4>
                <h5 class="text-justify">{{$word_search->similar_word_one}}, {{$word_search->similar_word_two}}, {{$word_search->similar_word_three}}</h5>
            </div>
        </div>
@php
    }else if(!empty($word_search->similar_word_one) && !empty($word_search->similar_word_two)){
        @endphp    
        <div class="row py-2 border">
            <div class="ml-3 mx-auto w-full bg-white">
                <h4 class="text-justify"><b>Synonyms (Kalma mafi Alaƙa)</b></h4>
                <h5 class="text-justify">{{$word_search->similar_word_one}}, {{$word_search->similar_word_two}}</h5>
            </div>
        </div>
        @php
    }else if(!empty($word_search->similar_word_one)){
        @endphp    
        <div class="row py-2 border">
            <div class="ml-3 mx-auto w-full bg-white">
                <h4 class="text-justify"><b>Synonyms (Kalma mafi Alaƙa)</b></h4>
                <h5 class="text-justify">{{$word_search->similar_word_one}}</h5>
            </div>
        </div>
        @php
    }
@endphp

<!-- MAANAR KALMA  -->
@php
    if(!empty($word_search->maanarkamar)){
@endphp        
    <div class="py-2 border">
    
        <div class="ml-3 w-full bg-white">
            <h4 class="text-justify"><b>Ma'anar Kalma</b></h4>
            <h5 class="text-justify">{{$word_search->maanarkamar}}</h5>
        </div>

    </div>
@php
    }
@endphp

<!-- MEANING  -->
<div class="py-2 border">
    <div class="ml-3 w-full bg-white">
        <h4 class="text-justify"><b>Meaning</b></h4>
        <h5 class="text-justify">{{$word_search->meaning}}</h5>
    </div>
</div>

<!-- Plural -->
<div class="row  border py-2 d-flex flex-row justify-content-between">
    @if($word_search->singular != null)
    <div class="ml-3">
        <h4 class="text-justify"><b>Singular</b></h4>
        <h5 class="text-justify">{{$word_search->singular}}</h5>
    </div>
    @else
    <div class="ml-3">
        <h4 class="text-justify"><b>Singular</b></h4>
        <h5 class="text-justify">{{$word_search->wordEnglish}}</h5>
    </div>
    @endif
    @if($word_search->plural != null)
    <div class="mx-3">   
        <h4 class="text-justify"><b>Plural</b></h4>
        <h5 class="text-justify">{{$word_search->plural}}</h5>
    </div>
    @else
    <div class="mx-3">   
        <h4 class="text-justify"><b>Plural</b></h4>
        <h5 class="text-justify">{{$word_search->wordEnglish}}</h5>
    </div>
    @endif
</div>

<!-- Singluar -->
<div class="row py-2 border row d-flex flex-row justify-content-between">
    @if($word_search->tilo != null)
    <div class="ml-3">
        <h4 class="text-justify"><b>Tilo</b></h4>
        <h5 class="text-justify">{{$word_search->tilo}}</h5>
    </div>
    @else
    <div class="ml-3">
        <h4 class="text-justify"><b>Tilo</b></h4>
        <h5 class="text-justify">{{$word_search->wordHausa}}</h5>
    </div>
    @endif
    @if($word_search->jami != null)
    <div class="mx-3">
        <h4 class="text-justify"><b>Jam'i</b></h4>
        <h5 class="text-justify">{{$word_search->jami}}</h5>
    </div>
    @else
    <div class="mx-3">
        <h4 class="text-justify"><b>Jam'i</b></h4>
        <h5 class="text-justify">{{$word_search->wordHausa}}</h5>
    </div>
    @endif
</div>