@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pronunciation</h4>
                        </div>
                        <div class="card-body">
                            <a href="/pronunciation">
                                <img class="img-responsive w-50 mx-auto" src="/images/home_icon.png" alt="Home"><br>
                                <span class="mx-3">Go Back</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header"><h4>Edit pronunciation</h4></div>
                        <div class="card-body">
                            {{session('msg')}}
                                <form action="/pronunciation/pronunciation/edit/{{$pronunciation->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PATCH')
                                    <div class="row my-3">
                                        <div class="col-sm-4">
                                            <label for="pronunciation_type">Pronunciation Type</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="pronunciation_type" class="form-control">
                                                <option>{{$pronunciation->pronunciation_type}}</option>
                                                <option value="Vowel">Vowel</option>
                                                <option value="Consonant">Consonant</option>
                                                <option value="Special Characters">Special Characters</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-sm-4">
                                            <label for="sound">Enter Letter</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input value="{{$pronunciation->sound}}" type="text" name="sound" class="form-control" placeholder="Enter Letter">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-sm-4">
                                            <label for="upload-sound">Upload Audio</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input value="{{$pronunciation->upload_sound}}" type="file" name="upload_sound" class="form-control-file">
                                            <input value="{{$pronunciation->upload_sound}}" type="text" name="upload_sound_not_empty" style="display:none;">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-sm-4">
                                            <label for="example">Letter Example</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input value="{{$pronunciation->example}}" type="text" name="example" class="form-control" placeholder="Letter Example">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-sm-4">
                                            <label for="example">Example I</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input value="{{$pronunciation->exampleone}}" type="text" name="exampleone" class="form-control" placeholder="Word Example I">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-sm-4">
                                            <label for="example">Example II</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input value="{{$pronunciation->exampletwo}}" type="text" name="exampletwo" class="form-control" placeholder="Word Example I">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-sm-4">
                                            <label for="upload-example">Upload Example Audio</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input value="{{$pronunciation->upload_example}}" type="file" name="upload_example" class="form-control-file">
                                            <input value="{{$pronunciation->upload_example}}" type="text" name="upload_example_not_empty" style="display:none;">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <input type="submit" value="Edit pronunciation" name="add-pronunciation" id="add-pronunciation" class="w-100 btn btn-warning">
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
