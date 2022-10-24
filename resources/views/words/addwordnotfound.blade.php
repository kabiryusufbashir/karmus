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
            
            <div class="row">
                @include('layouts.nav')
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h4>Add {{$addwordnotfound}}</h4></div>
                        <div class="card-body">
                            <form action="/words" method="POST">
                                @csrf 
                                <div class="row my-3">
                                    <input value="{{$addwordnotfound}}" required type="text" name="wordEnglish" class="form-control" placeholder="Enter Word Name in English">
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

        </div>
    </div>
</div>
@endsection
