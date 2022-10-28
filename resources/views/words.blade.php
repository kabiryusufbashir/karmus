@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        <p class="text-center">{{session('msg')}}</p>
                    </h3>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                @include('layouts.nav')
                
                <div>
                    <div class="shadow p-9">
                        <div><h4>Add Word</h4></div>
                        <div>
                            <form action="/words" method="POST">
                                @csrf 
                                <div class="row my-3">
                                    <input required type="text" name="wordEnglish" class="input-field" placeholder="Enter Word Name in English">
                                </div>
                                <div class="row my-3">
                                    <input required type="text" name="wordHausa" class="input-field" placeholder="Enter Word Name in Hausa">
                                </div>
                                <div class="row my-3">
                                    <textarea required class="input-field" placeholder="Meaning of the Word" name="meaning"></textarea>
                                </div>
                                <div class="row my-3">
                                    <textarea required class="input-field" placeholder="Ma'anar Kalma" name="maanarkamar"></textarea>
                                </div>
                                <div class="row my-3">
                                    <!-- <div class="col-md-6">
                                        <input class="input-field" placeholder="Tilo" name="tilo">
                                    </div> -->
                                    <div class="col-md-6">
                                        <input class="input-field" placeholder="Jam'i" name="jami">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <!-- <div class="col-md-6">
                                        <input class="input-field" placeholder="Singular" name="singular">
                                    </div> -->
                                    <div class="col-md-6">
                                        <input class="input-field" placeholder="Plural" name="plural">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <input class="input-field" placeholder="Similar Word 1" name="similar_word_one">
                                </div>
                                <div class="row my-3">
                                    <input class="input-field" placeholder="Similar Word 2" name="similar_word_two">
                                </div>
                                <div class="row my-3">
                                    <input class="input-field" placeholder="Similar Word 3" name="similar_word_three">
                                </div>    
                                <input style="display:none;" type="text" name="author" value="{{ Auth::user()->name }}">
                                <div class="row my-3">
                                    <input type="submit" value="Add Word" name="add-word" id="add-word" class="w-full bg-green-700 p-2 rounded text-white">
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 

            </div>

            <div class="row my-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Word</h4>
                        </div>
                        <div class="card-body">
                            @if(count($words) > 0)
                                
                                <div class="row d-flex justify-content-end">
                                    <div class="col-md-6">
                                        
                                        <form action="/search_word" id="searchWordDashBoard" method="POST">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" name="search_dashboard" id="search" class="input-field w-100" placeholder="Bincika < > Search" aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <input class="input-group-text bg-success text-white" id="basic-addon2" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    
                                    </div>
                                </div>
                                
                                <div class="bg-white text-dark" id="searchFeedbackDashboard"></div>
                                
                                <table id="wordAllDashboard" class="w-full">
                                    <tr class="text-left whitespace-nowrap">
                                        <th class="px-6 py-2 text-xs text-gray-500">Hausa</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">English</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Ma'anar Kalma</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Meaning</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Tilo</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Jam'i</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Singular</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Plural</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Similar Word 1</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Similar Word 2</th>
                                        <th class="px-6 py-2 text-xs text-gray-500">Similar Word 3</th>
                                        <th class="px-6 py-2 text-xs text-gray-500"></th>
                                        <th class="px-6 py-2 text-xs text-gray-500"></th>
                                    </tr>
                                    @foreach($words as $word)
                                    <tr class="divide-y divide-gray-300 border-b-2">
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->wordHausa}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->wordEnglish}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->maanarkamar}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->meaning}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->tilo}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->jami}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->singular}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->plural}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->similar_word_one}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->similar_word_two}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{$word->similar_word_three}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500"><a href="/words/words/edit/{{$word->id}}" class="bg-green-700 p-2 rounded text-white">Edit</a></td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            <form action="/words/{{$word->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="DELETE" class="bg-red-700 p-2 rounded text-white">
                                            </form>
                                        </td>
                                    </tr>    
                                    @endforeach
                                </table>  

                                <div class="row d-flex justify-content-center">
                                    {{$words->links()}}
                                </div>          
                            @else
                                <h3>No Word Stored</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
