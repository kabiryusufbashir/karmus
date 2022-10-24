@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4>Words</h4>
                        </div>
                        <div class="card-body">
                            <a href="/words">
                                <img class="img-responsive w-50 mx-auto" src="/images/home_icon.png" alt="Home"><br>
                                <span class="mx-3">Go Back</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header"><h4>Edit Word</h4></div>
                        <div class="card-body">
                            {{session('msg')}}
                                <form action="/words/words/edit/{{$word->id}}" method="POST">
                                    @csrf 
                                    @method('PATCH')
                                    <div class="row my-3">
                                        <div class="col-md-6">
                                            <label for="wordEnglish"><h5>English</h5></label>
                                            <input value="{{$word->wordEnglish}}" required type="text" name="wordEnglish" class="form-control" placeholder="Enter Word Name in English">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="wordHausa"><h5>Hausa</h5></label>
                                            <input value="{{$word->wordHausa}}" required type="text" name="wordHausa" class="form-control" placeholder="Enter Word Name in Hausa">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-12">
                                            <label for="meaning"><h5>Meaning</h5></label>
                                            <textarea required class="form-control" placeholder="Meaning of the Word" name="meaning">{{$word->meaning}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-12">
                                            <label for="meaning"><h5>Ma'anar Kalma</h5></label>
                                            <textarea required class="form-control" placeholder="Ma'anar Kalma" name="maanarkamar">{{$word->maanarkamar}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <!-- <div class="col-md-6">
                                            <label for="tilo"><h5>Tilo</h5></label>
                                            <input value="{{$word->tilo}}" class="form-control" placeholder="Tilo" name="tilo">
                                        </div> -->
                                        <div class="col-md-6">
                                            <label for="jami"><h5>Jam'i</h5></label>
                                            <input value="{{$word->jami}}" class="form-control" placeholder="Jam'i" name="jami">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <!-- <div class="col-md-6">
                                            <label for="singular"><h5>Singular</h5></label>
                                            <input value="{{$word->singular}}" class="form-control" placeholder="Singular" name="singular">
                                        </div> -->
                                        <div class="col-md-6">
                                            <label for="plural"><h5>Plural</h5></label>
                                            <input value="{{$word->plural}}" class="form-control" placeholder="Plural" name="plural">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-4">
                                            <label for="similar_word_one"><h5>Similar Word 1</h5></label>
                                            <input value="{{$word->similar_word_one}}" class="form-control" placeholder="Similar Word 1" name="similar_word_one">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="similar_word_two"><h5>Similar Word 2</h5></label>
                                            <input value="{{$word->similar_word_two}}" class="form-control" placeholder="Similar Word 2" name="similar_word_two">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="similar_word_three"><h5>Similar Word 3</h5></label>
                                            <input value="{{$word->similar_word_three}}" class="form-control" placeholder="Similar Word 3" name="similar_word_three">
                                        </div>
                                    </div>
                                    <!-- <input style="display:none;" type="text" name="author" value="{{ Auth::user()->name }}"> -->
                                    <div class="row justify-content-between">
                                        <div class="col-md-5">
                                            <input type="submit" value="Edit Word" name="add-word" id="add-word" class="w-100 btn btn-warning">
                                        </div>
                            </form>
                                        <div class="col-md-5">
                                            <form action="/words/{{$word->id}}" method="POST">
                                                @csrf 
                                                @method('DELETE')
                                                <input type="submit" value="Delete Word" name="delete-word" id="delete-word" class="w-100 btn btn-danger">
                                            </form>
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
