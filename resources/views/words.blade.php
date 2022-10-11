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
            
            <div class="row justify-content-center">
                @include('layouts.nav')
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"><h4>Add Word</h4></div>
                        <div class="card-body">
                            <form action="/words" method="POST">
                                @csrf 
                                <div class="row my-3">
                                    <input required type="text" name="wordEnglish" class="form-control" placeholder="Enter Word Name in English">
                                </div>
                                <div class="row my-3">
                                    <input required type="text" name="wordHausa" class="form-control" placeholder="Enter Word Name in Hausa">
                                </div>
                                <div class="row my-3">
                                    <textarea required class="form-control" placeholder="Meaning of the Word" name="meaning"></textarea>
                                </div>
                                <div class="row my-3">
                                    <textarea required class="form-control" placeholder="Ma'anar Kalma" name="maanarkamar"></textarea>
                                </div>
                                <div class="row my-3">
                                    <!-- <div class="col-md-6">
                                        <input class="form-control" placeholder="Tilo" name="tilo">
                                    </div> -->
                                    <div class="col-md-6">
                                        <input class="form-control" placeholder="Jam'i" name="jami">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <!-- <div class="col-md-6">
                                        <input class="form-control" placeholder="Singular" name="singular">
                                    </div> -->
                                    <div class="col-md-6">
                                        <input class="form-control" placeholder="Plural" name="plural">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <input class="form-control" placeholder="Similar Word 1" name="similar_word_one">
                                </div>
                                <div class="row my-3">
                                    <input class="form-control" placeholder="Similar Word 2" name="similar_word_two">
                                </div>
                                <div class="row my-3">
                                    <input class="form-control" placeholder="Similar Word 3" name="similar_word_three">
                                </div>    
                                <input style="display:none;" type="text" name="author" value="{{ Auth::user()->name }}">
                                <div class="row my-3">
                                    <input type="submit" value="Add Word" name="add-word" id="add-word" class="w-100 btn btn-success">
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
                                                <input type="text" name="search_dashboard" id="search" class="form-control w-100" placeholder="Bincika < > Search" aria-label="Search" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <input class="input-group-text bg-success text-white" id="basic-addon2" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    
                                    </div>
                                </div>
                                
                                <div class="bg-white text-dark" id="searchFeedbackDashboard"></div>
                                
                                <table id="wordAllDashboard" class="table table-striped table-responsive">
                                    <tr>
                                        <th>Hausa</th>
                                        <th>English</th>
                                        <th>Ma'anar Kalma</th>
                                        <th>Meaning</th>
                                        <th>Tilo</th>
                                        <th>Jam'i</th>
                                        <th>Singular</th>
                                        <th>Plural</th>
                                        <th>Similar Word 1</th>
                                        <th>Similar Word 2</th>
                                        <th>Similar Word 3</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach($words as $word)
                                    <tr>
                                        <td>{{$word->wordHausa}}</td>
                                        <td>{{$word->wordEnglish}}</td>
                                        <td>{{$word->maanarkamar}}</td>
                                        <td>{{$word->meaning}}</td>
                                        <td>{{$word->tilo}}</td>
                                        <td>{{$word->jami}}</td>
                                        <td>{{$word->singular}}</td>
                                        <td>{{$word->plural}}</td>
                                        <td>{{$word->similar_word_one}}</td>
                                        <td>{{$word->similar_word_two}}</td>
                                        <td>{{$word->similar_word_three}}</td>
                                        <td><a href="/words/words/edit/{{$word->id}}" class="btn btn-warning">Edit</a></td>
                                        <td>
                                            <form action="/words/{{$word->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="DELETE" class="btn btn-danger">
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
